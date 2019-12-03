<?php
require_once  ('../../include/config.php');
session_start();

if ($_SESSION['auth'] == true)
{
	?>
	<html>
	  <head>
	  	<title>Admin Panel | Images</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin-img.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<div class="center-menu">
	  		<a style="padding-right: 40px; color:black; text-decoration: none;" href="/admin">
	  			Back
	  		</a>
	  		<a style="font-weight: bold;">
	  			Images
	  		</a>
	  		<a style="padding-left: 40px; color:black; text-decoration: none;" href="add.php">
	  			Add
	  		</a>
	  		<a style="padding-left: 40px; color:black; text-decoration: none;" href="delete.php">
	  			Delete
	  		</a>
	    </div>
	  	<div class="center">
	  	 <div class="img-big-block">
	<?
	
	//����������
 	$directory = "../../include/img/news";    // ����� � �������������
    $allowed_types=array("jpg", "png", "gif");  //���������� ���� �����������
    $file_parts = array();
    $ext="";
    $title="";
    $i=0;

    //������� ������� �����
    $dir_handle = @opendir($directory) or die("������ ��� �������� ����� !!!");
    while ($file = readdir($dir_handle))    //����� �� ������
    {
    	if($file=="." || $file == "..") continue;  //���������� ������ �� ������ �����
        $file_parts = explode(".",$file);          //��������� ��� ����� � ��������� ��� � ������
        $ext = strtolower(array_pop($file_parts));   //��������� �������� - ��� ����������


      	if(in_array($ext,$allowed_types))
      	{
          ?>

           <div>
				<div class="img-name">
					<?echo $file?>
				</div>
				<div class="img-image">
					<img src="<?echo $directory?>/<?echo $file?>" style="width: 100%; height: 100%;" title="<?echo $file?>" />
				</div>
			</div>

          <?
     	  $i++;
        }
     }
    closedir($dir_handle);  //������� �����

	?>

		  </div>
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