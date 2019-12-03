<?
require_once  ('../../include/config.php');
session_start();

if ($_SESSION['auth'] == true)
{
	$hidden = $_POST['hidden'];
	$id = $_POST['id'];



	if($hidden == 1)
	{
		mysqli_query($link, "UPDATE news SET hidden='0' WHERE id='$id'");
		header("Location: /admin/news");
	}
	else
	{
		mysqli_query($link, "UPDATE news SET hidden='1' WHERE id='$id'");
		header("Location: /admin/news");	
	}
}
else
{
	header("Location: /admin/login.php");
}
?>