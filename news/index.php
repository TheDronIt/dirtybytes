<?php
	require_once  ('../include/config.php');
?>
<html>
  <head>
  	<title>Admin Panel | News edit</title>
  	<link rel="stylesheet" type="text/css" href="/include/css/news.css">
  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
  </head>
  <body>			
  	<a href="/">
		<div class="head-logo">
			DirtyBytes
		</div>
	</a>

	<div class="nav">
		<div>
			<a href="/" style="text-decoration: none; color: black;">
				Назад
			</a>
		</div>
		<div>
			<a style="font-weight: bold;">
				Список новостей
			</a>
		</div>	
	</div>

	<div class="news-block">
	  <?
		$sql = mysqli_query($link, "SELECT * FROM news WHERE hidden = '0' ORDER BY id DESC");
		while ($news = mysqli_fetch_array($sql)) 
		{
		  ?>
		  <a href="https://<?echo$news['link']?>" style="text-decoration: none;">
			<div class="news-card">	
				<div class="img">
					<img class="news-photo" src="../include/img/news/<?echo$news['photo']?>" >
				</div>
				<div class="headline">
					<?echo$news['headline']?>
				</div>
				<div class="descr">
					<?echo$news['descr']?>
				</div>
				<div class="date">
					<?echo$news['date']?>
				</div>
			</div>
		  </a>
		  <?
		}
	  ?>
	</div>
	<footer>
		<a href="https://instagram.com/dirtybytesctf" target="_blank">DirtyBytes</a> - Хабаровская команда по CTF игре.<br>
        По всем вопросам пишите на почту: <a href="mailto:dirtybytesctf@gmail.com" target="_blank">dirtybytesctf@gmail.com</a><br>
        Code by: <a href="https://vk.com/dronbro" target="_blank">TheDronIt</a>. Все права защищены. © 2017-2020
	</footer>
  </body>
</html>