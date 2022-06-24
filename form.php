<?php
$email = trim(strip_tags($_POST["email"]));
$subject = "Ваша подписка!";
$msg = "Это уведомление о том, что вы успешно подключили подписку на рассылку закрытых акций.\n";
$headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
$headers .= "From: FlightPool@mail.ru" . "\r\n";
$headers .= "Команда FlightPool". "\r\n";
if () {
	mail($email, $subject, $msg, $headers);
	echo("Yes!")
}
?>