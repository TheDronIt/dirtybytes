<?php
session_start();

if ($_SESSION['auth'] == true)
{
	?>
		<html>
		  <head>
		  	<title>Admin Panel</title>
		  	<link rel="stylesheet" type="text/css" href="/include/css/admin.css">
		  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
		  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
		  </head>
		  <body>
		  	<div class="panel-main-block">
		  		<div class="panel-news">
		  			<a href="/admin/news" style="color:black; text-decoration: none;">
		  				Новости
		  			</a>
		  		</div>
		  		<div class="panel-ban">
		  			<a href="/admin/ban" style="color:black; text-decoration: none;">
		  				Блокировки
		  			</a>
		  		</div>
		  		<div class="panel-image">
		  			<a href="/admin/image" style="color:black; text-decoration: none;">
		  				Изображения
		  			</a>
		  		</div>
		  		<div class="panel-image">
		  			<a href="/admin/help" style="color:black; text-decoration: none;">
		  				Помощь
		  			</a>
		  		</div>
		  		<div class="panel-logout">
		  			<a href="/admin/logout.php" style="color:black; text-decoration: none;">
		  				Выйти
		  			</a>
		  		</div>
		  	</div>
		  </body>
		</html>
	<?php
}
else
{
	header("Location: login.php");
}
?>