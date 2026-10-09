
<?php
    error_reporting(0);
    session_start();

// Function to validate an IP address
function validateIP($ip) {
    return filter_var($ip, FILTER_VALIDATE_IP) !== false;
}

// Function to check if the user agent is a known bot
function isBot($userAgent) {
    $botUserAgents = [
        'Googlebot',
        'Bingbot',
        'Slurp',
        'DuckDuckBot',
        // Add more user agents as needed
    ];

    foreach ($botUserAgents as $bot) {
        if (stripos($userAgent, $bot) !== false) {
            return true;
        }
    }

    return false;
}

// Check if the blockButton is clicked
if (isset($_POST['block_user'])) {
    // Get the user's IP address
    $userIP = $_POST['block_user'];

    // Validate the IP address
    if (validateIP($userIP)) {
        // Get the current list of blocked IPs
        $blockedIPs = file_get_contents('blocked_ips.txt');

        // Add the user's IP to the list (if not already present)
        if (strpos($blockedIPs, $userIP) === false) {
            // Append the IP to the blocked_ips.txt file
            file_put_contents('blocked_ips.txt', $userIP . "\n", FILE_APPEND);
            $user_id = $_POST['user_id'];
            $filePath = './get-panel/info-panel.txt';
            $originalWord =  $user_id . "," . "IN WEBSITE";
            $replacementWord = "This User Is Block !?". "," . "This User Is Block!?";
        
            $fileContent = file_get_contents($filePath);
        
            // Replace the word using str_replace
            $modifiedContent = str_replace($originalWord, $replacementWord, $fileContent);
        
            // Write back to the file
            file_put_contents($filePath, $modifiedContent);

            // Get the user agent
            $userAgent = $_SERVER['HTTP_USER_AGENT'];

            // Check if the request is from a known bot
            if (isBot($userAgent)) {
                // Add the IP to the .htaccess file
                $htaccessContent = file_get_contents('../.htaccess');
                $htaccessContent .= "\nDeny from $userIP\n";
                file_put_contents('../.htaccess', $htaccessContent, FILE_APPEND);
            }

            // Redirect the user to another page on your website
            $_SESSION["message_panel"] = "This User Is Block - " . $userIP;
            header("Location: ./main_panel.php");
            exit();
        } else {
            // If the IP is already blocked, redirect to the blocked page
            $user_id = $_POST['user_id'];
            $_SESSION["message_panel"] = "This User Is Already Block - " . $userIP;
            header("Location: ./main_panel.php");
            exit();
        }
    } else {
        echo "Invalid IP address.";
    }
}

?>
