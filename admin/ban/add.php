<?
require_once  ('../../include/config.php');
session_start();

 



if ($_SESSION['auth'] == true)
{

	//Добавление новости после нажатия на кнопку
	if( isset( $_POST['sumbit'] ) )
 	{
 		$get_ip = $_POST['ip'];
 		$get_reason = $_POST['reason'];
 		
 		mysqli_query($link, "INSERT INTO `ip_ban` (`id`, `ip`, `reason`, `date`) VALUES (NULL, '$get_ip', '$get_reason', current_timestamp());");

 		header("Location: /admin/ban");
 	}


	?>
	<html>
	  <head>
	  	<title>Add ban</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin-news.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<form method="POST">
		  <div class="add-center-block">
		  	<div style="padding:5px 0 0 20px; font-size: 20px;">
		  		<a href="/admin/ban" style="color:grey; text-decoration: none;">< Back</a>
		  	</div>
		  	<div style="text-align: center; padding-top: 10px; font-size: 25px;	font-weight: bold;">Добавление бана IP</div>
			<div class="add-input-block">
				<div class="text">
					IP
				</div>
				<div class="input">
					<input class="add-input" name="ip" type="textarea" placeholder="IP адрес" required="">
				</div>
				<div class="text">
					Причина
				</div>
				<div class="input">
					<textarea class="add-input" name="reason" rows="3" placeholder="Причина блокировки" required=""></textarea>
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