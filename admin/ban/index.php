<?php
require_once  ('../../include/config.php');
session_start();

if ($_SESSION['auth'] == true)
{

	//Удаляем бан после нажатия на кнопку
	if( isset( $_POST['delete'] ) )
 	{
 		$get_id = $_POST['id'];

 		mysqli_query($link, "DELETE FROM `ip_ban` WHERE `ip_ban`.`id` = '$get_id'");
 	}



	?>
	<html>
	  <head>
	  	<title>Admin Panel | IP Ban edit</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin-ban.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<div class="center-menu">
	  		<a style="padding-right: 40px; color:black; text-decoration: none;" href="/admin">
	  			Back
	  		</a>
	  		<a style="font-weight: bold;">
	  			Ban edditor
	  		</a>
	  		<a style="padding-left: 40px; color:black; text-decoration: none;" href="add.php">
	  			Add
	  		</a>
	    </div>
	  	<div class="center">
	  	<?

	  	$ipban_row = mysqli_num_rows(mysqli_query($link,"SELECT * FROM ip_ban"));

	  	//Проверяем кол-во банов, и если банов нет, то сообщаем об этом, а не выдаем пустоту
	  	if ($ipban_row == 0)
	  	{
	  		echo "<div style='font-size: 32px; font-weight: bold; text-align: center; margin-top: 20px;'>Нет блокировок IP адресов</div>";
	  	}
	  	else
	  	{	

	  		//Вывод одной карточки с баном
	  		$sql = mysqli_query($link, "SELECT * FROM ip_ban");
			while ($ipban = mysqli_fetch_array($sql)) 
			{
			  ?>
				<div class="ipban-block">
					<div class="info">
						<a style="font-weight: bold;">id:</a> <?echo $ipban['id']?> || <a style="font-weight: bold;">IP:</a> <?echo $ipban['ip']?>
					</div>
					<div class="delete">
						<form method="POST">
							<input type="hidden" name="id" value="<?echo $ipban['id']?>">
    						<input style="width: 90%; border-radius: 10px; background-color: #FAFAFA;" type="submit" name="delete" value="Delete">
						</form>
					</div>
					<div class="info">
						<a style="font-weight: bold;">Reason:</a> <?echo $ipban['reason']?>
					</div>
					<div class="info">
						<a style="font-weight: bold;">Date:</a> <?echo $ipban['date']?>
					</div>
				</div>
			  <?
			}


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