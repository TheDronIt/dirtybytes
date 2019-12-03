<?php
require_once  ('include/config.php');

$mes = $_POST['mes'];
$head = $_POST['head'];
$get_mail = $_POST['mail'];
$ip = $_SERVER['REMOTE_ADDR'];



$sql = mysqli_query($link, "SELECT * FROM ip_ban WHERE ip = '$ip'");
while ($ban = mysqli_fetch_array($sql)) 
{
	$ban_ip = $ban['ip'];
	$ban_reason = $ban['reason'];
}

if ($get_mail)
{
	$mail = $_POST['mail'];
}
else
{
	$mail = "Не указан";
}

$usermes = "Сообщение: $mes\n\nIP: $ip\nMail: $mail";
$headers="MIME-Version: 1.0\nContent-type: text/html; charset=utf-8\nFrom: noreply@dirtybytes.ru\n";


if(!$ban_ip)
{
	if (strlen($mes) > 0 && strlen($head) > 0)
	{	
		mail("noreply@dirtybytes.ru", $head, $usermes, $headers);
		mail("andreykae28@gmail.com", "Внимание!", "Новое сообщение на почте noreply@dirtybytes.ru");
	}
}
else
{
	header("Location: /ban.php");
}




?>
<html>
<head>
	<script>window.location.href='/index.php';</script>
</head>
</html>