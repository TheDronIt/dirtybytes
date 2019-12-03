<?
require_once  ('../../include/config.php');
session_start();

 



if ($_SESSION['auth'] == true)
{

	//Добавление новости после нажатия на кнопку
	if( isset( $_POST['sumbit'] ) )
 	{
 		$get_headline = $_POST['headline'];
 		$get_descr = $_POST['descr'];
 		$get_photo = $_POST['photo'];
 		$get_link = $_POST['link'];
 		$get_date = $_POST['date'];

 		mysqli_query($link, "INSERT INTO `news` (`id`, `headline`, `descr`, `date`, `photo`, `link`, `hidden`) VALUES (NULL, '$get_headline', '$get_descr', '$get_date', '$get_photo', '$get_link', '0')");

 		header("Location: /admin/news");
 	}


	?>
	<html>
	  <head>
	  	<title>Add News</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin-news.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<form method="POST">
		  <div class="add-center-block">
		  	<div style="padding:5px 0 0 20px; font-size: 20px;">
		  		<a href="/admin/news" style="color:grey; text-decoration: none;">< Back</a>
		  	</div>
		  	<div style="text-align: center; padding-top: 10px; font-size: 25px;	font-weight: bold;">Добавление новости</div>
			<div class="add-input-block">
				<div class="text">
					Заголовок
				</div>
				<div class="input">
					<input class="add-input" name="headline" type="textarea" placeholder="Заголовок" required="">
				</div>
				<div class="text">
					Описание
				</div>
				<div class="input">
					<textarea class="add-input" name="descr" rows="3" placeholder="Описание" required=""></textarea>
				</div>
				<div class="text">
					Изображение<br>(с расширением)
				</div>
				<div class="input">
					<input class="add-input" name="photo" type="textarea" placeholder="Изображение" required="">
				</div>
				<div class="text">
					Ссылка
				</div>
				<div class="input">
					<input class="add-input" name="link" type="textarea" placeholder="Ссылка" required="">
				</div>
				<div class="text">
					Дата
				</div>
				<div class="input">
					<input class="add-input" name="date" type="date">
				</div>
				<div class="button">
					<button class="add-button" type="submit" name="sumbit">Отправить</button>
				</div>
		  </div>
	  	</form>
	  </body>
	</html>
	<?
}
else
{
	header("Location: login.php");
}
?>