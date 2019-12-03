<?
require_once  ('../../include/config.php');
session_start();


 

if ($_SESSION['auth'] == true)
{

	//Добавление новости после нажатия на кнопку
	if( isset( $_POST['sumbit'] ) )
 	{
 		$upload_filename = $_POST['photo'];
 		$upload_file = $_FILES['userfile']['tmp_name'];
 		$upload_path = '../../include/img/news/';
 		
 		move_uploaded_file($upload_file,$upload_path."".$upload_filename . '.png');	

		header("Location: /admin/image");
 	}


	?>
	<html>
	  <head>
	  	<title>Add Image</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin-news.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<form method="POST" enctype="multipart/form-data">
		  <div class="add-center-block-long">
		  	<div style="padding:5px 0 0 20px; font-size: 20px;">
		  		<a href="/admin/image" style="color:grey; text-decoration: none;">< Back</a>
		  	</div>
		  	<div style="text-align: center; padding-top: 10px; font-size: 25px;	font-weight: bold;">Добавление изображения</div>
			<div class="add-input-block">
				<div class="text">
					Название изображение
				</div>
				<div class="input">
					<input class="add-input" name="photo" type="textarea" placeholder="Заголовок" required="">
				</div>
				<div class="text">
					Изображение
				</div>
				<div class="input">
					<input name="userfile" type="file">
				</div>
				<div class="button">
					<button class="add-button" type="submit" name="sumbit">Отправить</button>
				</div>
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