<?
require_once  ('../../include/config.php');
session_start();


if ($_SESSION['auth'] == true)
{

	$get_id = $_POST['id']; //Айдишник новости

	//Сохранение новости после нажатия на кнопку
	if( isset( $_POST['sumbit'] ) )
	{
 		$get_headline = $_POST['headline'];
 		$get_descr = $_POST['descr'];
 		$get_photo = $_POST['photo'];
 		$get_link = $_POST['link'];
 		$get_date = $_POST['date'];

 		mysqli_query($link, "UPDATE news SET headline='$get_headline', descr='$get_descr', photo='$get_photo', link='$get_link', date='$get_date' WHERE id='$get_id'");



 		header("Location: /admin/news");
 	}	

	if($_POST['id'])
	{

		//Подключение к бд и создание переменной для новости
		$sql = mysqli_query($link, "SELECT * FROM news WHERE id='$get_id'");
		while ($anews = mysqli_fetch_array($sql)) 
		{
			$edit_headline = $anews['headline'];
 			$edit_descr = $anews['descr'];
 			$edit_photo = $anews['photo'];
 			$edit_link = $anews['link'];
 			$edit_date = $anews['date']; 			
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
		  	<div style="text-align: center; padding-top: 10px; font-size: 25px;	font-weight: bold;">Редактирование новости #<?echo $get_id?></div>
			<div class="add-input-block">
				<div class="text">
					Заголовок
				</div>
				<div class="input">

					<input class="add-input" value="<?echo $edit_headline?>" name="headline" type="textarea" placeholder="Заголовок" required="">
				</div>
				<div class="text">
					Описание
				</div>
				<div class="input">
					<textarea class="add-input" name="descr" rows="3" placeholder="Описание" required=""><?echo $edit_descr?></textarea>
				</div>
				<div class="text">
					Изображение<br>(с расширением)
				</div>
				<div class="input">
					<input class="add-input" value="<?echo $edit_photo?>" name="photo" type="textarea" placeholder="Изображение" required="">
				</div>
				<div class="text">
					Ссылка
				</div>
				<div class="input">
					<input class="add-input" value="<?echo $edit_link?>" name="link" type="textarea" placeholder="Ссылка" required="">
				</div>
				<div class="text">
					Дата
				</div>
				<div class="input">
					<input class="add-input" value="<?echo $edit_date?>" name="date" type="date">
				</div>
				<div class="button">
					<input type="hidden" name="id" value="<?echo $get_id?>">
					<button class="add-button" type="submit" name="sumbit">Сохранить</button>
				</div>
		  </div>
	  	</form>
	  </body>
	</html>
	<?

	}
	else
	{
		header("Location: /admin/news");
	}
}
else
{
	header("Location: /admin/login.php");
}
?>