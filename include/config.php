<?php
$site_title = "DirtyBytes";



$host = 0;

if($host == 0)
{
$sql_host="localhost";
$sql_login="root";
$sql_password="";
$sql_db="dirtybytes";
}
else
//-------(server)--------//
{
$sql_host="localhost";
$sql_login="thedronit";
$sql_password="123123db";
$sql_db="thedronit";
}
/*===========|SQL CONNECT|===========*/
$link = mysqli_connect($sql_host, $sql_login, $sql_password, $sql_db) 
or die("Ошибка подключения к БД" . mysqli_error($link));
?>