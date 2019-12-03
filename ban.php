<?php
	require_once  ('include/config.php');

	$ip = $_SERVER['SERVER_ADDR'];

	$sql = mysqli_query($link, "SELECT * FROM ip_ban WHERE ip='$ip'");
	while ($ban = mysqli_fetch_array($sql)) 
	{
		$ban_ip = $ban['ip'];
		$ban_reason = $ban['reason'];
		$ban_date = $ban['date'];
	}


	if($ban_ip)
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Banned :с</title>
	<link rel="stylesheet" type="text/css" href="/include/css/desktop.css">
	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
</head>
<body>
	<div class="head-logo">
		<a href="/" style="color:black; text-decoration: none;">
			DirtyBytes
		</a>
	</div>
	<div class="e404-content">
		<div class="ban-text">
			К сожалению вы получили блокировку за <?echo $ban_reason?>. Время блокировки: <?echo $ban_date?>
			<br><br>	
			Если вы не согласны с решением и хотите получить разблокировку напишите <a href="https://vk.com/dronbro" style="color:black; text-decoration: none;">Сюда (кликабельно)</a>
		</div>
		<div>
			<a href="/" style="text-decoration: none;">
			  <div class="e404-button">
				Вернуться
			  </div>
			</a>
		</div>
		<div class="social">
			<div class="social-ico">
				<a href="https://instagram.com/DirtyBytesCTF"><img class="social-ico-img instagram" src="/include/img/social-icon/instagram.png" alt=""></a>
				<a href="https://vk.com/initblog"><img class="social-ico-img vk" src="/include/img/social-icon/vk.png" alt=""></a>
				<a href="https://youtube.com"><img class="social-ico-img youtube" src="/include/img/social-icon/youtube.png" alt=""></a>
				<a href="https://instagram.com/initblog"><img class="social-ico-img instagram" src="/include/img/social-icon/instagram.png" alt=""></a>
			</div>
		</div>
	</div>
</body>
</html>

<?
}
else
{
	header("location: /404.html");
}