<?php
require_once  ('../../include/config.php');
session_start();

if ($_SESSION['auth'] == true)
{
	?>
	<html>
	  <head>
	  	<title>Admin Panel | News edit</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin-news.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<div class="center-menu">
	  		<a style="padding-right: 40px; color:black; text-decoration: none;" href="/admin">
	  			Back
	  		</a>
	  		<a style="font-weight: bold;">
	  			News edditor
	  		</a>
	  		<a style="padding-left: 40px; color:black; text-decoration: none;" href="add.php">
	  			Add
	  		</a>
	    </div>
	  	<div class="center">
	  	<?
	  		$sql = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC");
			while ($anews = mysqli_fetch_array($sql)) 
			{

				$hidden_status = $anews['hidden'];

				if($hidden_status == 0)
				{
					$hidden = "<a style='font-size: 16px;'>Норм</a>";
				}
				else
				{
					$hidden = "<a style='color:red; font-size: 16px;''>Скрыто</a>";	
				}

				?>
					<div class="one-news-block">
						<div class="img">
							<img  style="width:100%;height:100%;" src="/include/img/news/<?echo $anews['photo']?>" alt="Logo">
						</div>
						<div class="headline">
							<?echo "id ".$anews['id']." | ".$anews['headline']?>
						</div>
						<div style="color:grey;">
							<?echo "Status: ".$hidden?>
						</div>
						<div>
							<?echo $anews['descr']?>
						</div>
						<div>
							<form method="POST" action="change.php">
								<input type="hidden" name="hidden" value="<?echo $anews['hidden']?>">
								<input type="hidden" name="id" value="<?echo $anews['id']?>">
    							<input type="submit" name="change" value="Change">
							</form>
						</div>
						<div class="date">
							<?echo $anews['date']?>
						</div>
						<div>
							<form method="POST" action="edit.php">
								<input type="hidden" name="id" value="<?echo $anews['id']?>">
    							<input type="submit" name="edit" value="Edit">
							</form>
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