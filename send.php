<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $token = "5428109918:AAF_rWnlikoq-x9dh9BM81q2ntWiQoMeXD0";
    $chat_id = "-757594276";
    $arr = array(
  'Имя пользователя: ' => $name,
  'Email:' => $email,
  'Телефон: ' => $subject,
  'Текст: ' => $message
);




foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
        echo ('Письмо успешно отправлено!');
        }
    else {
        echo('Есть ошибки! Проверьте данные...');
        }
?>