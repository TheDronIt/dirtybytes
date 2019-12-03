<?php
require_once  ('../../include/config.php');
session_start();

if ($_SESSION['auth'] == true)
{

	?>
	<html>
	  <head>
	  	<title>Admin Panel | Help</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<div class="center-menu">
	  		<a style="padding-right: 40px; color:black; text-decoration: none;" href="/admin">
	  			Back
	  		</a>
	  		<a style="font-weight: bold;">
	  			Helper
	  		</a>
	    </div>
	  	<div class="center-container">
	  	<?

	  		//Вывод одной карточки с баном
	  		$sql = mysqli_query($link, "SELECT * FROM ip_ban");
			while ($ipban = mysqli_fetch_array($sql)) 
			{
			  ?>
				<div class="info-card">
					<div class="headline">
						Новости
					</div>
					<div class="text">
						Для создания новости мы переходим в пункт меню "<a href="/admin/news" style="color:black;">Новости</a>".<br>
						Мы попали в основной раздел Новостей, в котором собран список из всех новостей с полной информацией о них.<br>
						У каждой карточки есть "Статус". Он показвыается либо "Норм", либо "Скрыто". Состояние статуса можно изменить нажав на кнопку "<a style="font-weight: bold;">Change</a>".<br>
						Статус "<a style="font-weight: bold;">Норм</a>" отображает новость в общем списке новостей, а так же оторажает в главном меню, если новость одна из последних.<br>
						Статус "<a style="font-weight: bold;">Скрыто</a>" не отображает новость в общем пуле новостей, а так же не показывает на главном меню. Сама новость не удаляется, а только скрыватся.<br>
						Чтобы отредактировать новость, мы можем нажать на кнопку "<a style="font-weight: bold;">Edit</a>" на карточке, после чего нас перебросит в меню редатирования. После изменения данных, мы нажимаем на кнопку "Сохранить", тем самым сохраняя изменения.
						<br><br>
						<a style="font-weight: bold;">Создание новости</a><br>
						Сперва мы заходим в "<a style="font-weight: bold;">Картинки</a>", которые находятся в главном меню. Там мы видим все загруженные картинки для новостей, а так же их названия. <br>
						Нажимаем "Add", загружаем картинку и выдаем ей имя.<br>
						Теперь возвращаемся в главное меню, и переходим в "Новости", далее жмем "Add".<br>
						В заголовок мы вводим краткое название статьи. (про что она)<br>
						В изображение вставляем название картинки с расширением. Сами картинки и их названия находятся в главном меню -> картинки.<br>
						В "Ссылка", мы вводим ссылку на статью об эвенте.<br>
						Далее выбираем дату проведения события, и нажимаем кнопку "Отправить".
					</div>
				</div>

				<div class="info-card">
					<div class="headline">
						Блокировка IP
					</div>
					<div class="text">
						text
					</div>
				</div>
			  <?
			}


	  	?>
	    </div>
	  </body>
	</html>
	<?
}
else
{
	header("Location: /admin/login.php");
}
?>