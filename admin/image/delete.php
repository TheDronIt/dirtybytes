<?
require_once  ('../../include/config.php');
session_start();


 

if ($_SESSION['auth'] == true)
{

	//���������� ������� ����� ������� �� ������
	if( isset( $_POST['sumbit'] ) )
 	{
 		$filename = $_POST['photo'];
 		
 		unlink("../../include/img/news/$filename");

		header("Location: /admin/image");
 	}


	?>
	<html>
	  <head>
	  	<title>Delete Image</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin-news.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<form method="POST" enctype="multipart/form-data">
		  <div class="add-center-block">
		  	<div style="padding:5px 0 0 20px; font-size: 20px;">
		  		<a href="/admin/image" style="color:grey; text-decoration: none;">< Back</a>
		  	</div>
		  	<div style="text-align: center; padding-top: 10px; font-size: 25px;	font-weight: bold;">�������� �����������</div>
			<div class="add-input-block">
				<div class="text">
					���� (� �����������)
				</div>
				<div class="input">
					<input class="add-input" name="photo" type="textarea" placeholder="���������" required="">
				</div>
				<div class="button">
					<button class="add-button" type="submit" name="sumbit">���������</button>
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