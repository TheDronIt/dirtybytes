<?php
require_once  ('../include/config.php');
session_start();

$get_login = $_POST['login'];
$get_pass = $_POST['password'];


$sql = mysqli_query($link, "SELECT * FROM admin WHERE login='$get_login' AND pass='$get_pass'");
while ($account = mysqli_fetch_array($sql)) 
{
	$admin_login = $account['login'];
	$admin_password = $account['pass'];
}

if($_POST['login'] && $_POST['password'])
{
	if($_POST['login'] == $admin_login && $_POST['password'] == $admin_password)
	{
		$_SESSION['auth'] = true;
		header("Location: /admin");
	}
	else
	{
		echo "Упс.. Вы ошиблить в логине/пароле.";
	}
	
}
else
{
	header("Location: /404.html");
}
?>
