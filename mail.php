<?php
$mes = $_POST['mes'];
$head = $_POST['head'];
$mail = $_POST['mail'];
$usermes = "Сообщение: $mes\n\nIP: $ip\nMail: $mail";
$ip = $_SERVER['REMOTE_ADDR'];
$headers="MIME-Version: 1.0\nContent-type: text/html; charset=utf-8\nFrom: noreply@dirtybytes.ru\n";

if (strlen($mes) > 0)
{
	if (strlen($head) > 0)
	{
		mail("noreply@dirtybytes.ru", $head, $usermes, $headers);
	}
}

?>
<html>
<head>
	<script>window.location.href='/index.php';</script>
</head>
</html>