<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$comment = $_POST['comment'];
$fio = $_POST['fio'];
$company = $_POST['company'];
$job = $_POST['job'];
$phone = $_POST['phone'];

$token = "7812508038:AAHDxos1g_eNJZ_SUDrzI-YvUGY9lSeRoNM";
$chat_id = "-1002324825243";

$arr = array(
  'Ism: ' => $fio,
  'Telefon nomer: ' => $phone,
  'Kamentariya: ' => $comment,
  'kampaniya: ' => $company,
  'Lavozim: ' => $job,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  header('Location: /');
} else {
  echo $sendToTelegram;
}

