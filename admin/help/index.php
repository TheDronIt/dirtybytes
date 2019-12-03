<?php
require_once  ('../../include/config.php');
session_start();

if ($_SESSION['auth'] == true)
{

	?>
	<html>
	  <head>
	  	<title>Admin Panel | Help</title>
	  	<link rel="stylesheet" type="text/css" href="/include/css/admin.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/main.css">
	  	<link rel="stylesheet" type="text/css" href="/include/css/normalize.css">
	  </head>
	  <body>
	  	<div class="center-menu">
	  		<a style="padding-right: 40px; color:black; text-decoration: none;" href="/admin">
	  			Back
	  		</a>
	  		<a style="font-weight: bold;">
	  			Helper
	  		</a>
	    </div>
	  	<div class="center-container">
	  	<?

	  		//����� ����� �������� � �����
	  		$sql = mysqli_query($link, "SELECT * FROM ip_ban");
			while ($ipban = mysqli_fetch_array($sql)) 
			{
			  ?>
				<div class="info-card">
					<div class="headline">
						�������
					</div>
					<div class="text">
						��� �������� ������� �� ��������� � ����� ���� "<a href="/admin/news" style="color:black;">�������</a>".<br>
						�� ������ � �������� ������ ��������, � ������� ������ ������ �� ���� �������� � ������ ����������� � ���.<br>
						� ������ �������� ���� "������". �� ������������ ���� "����", ���� "������". ��������� ������� ����� �������� ����� �� ������ "<a style="font-weight: bold;">Change</a>".<br>
						������ "<a style="font-weight: bold;">����</a>" ���������� ������� � ����� ������ ��������, � ��� �� ��������� � ������� ����, ���� ������� ���� �� ���������.<br>
						������ "<a style="font-weight: bold;">������</a>" �� ���������� ������� � ����� ���� ��������, � ��� �� �� ���������� �� ������� ����. ���� ������� �� ���������, � ������ ���������.<br>
						����� ��������������� �������, �� ����� ������ �� ������ "<a style="font-weight: bold;">Edit</a>" �� ��������, ����� ���� ��� ���������� � ���� �������������. ����� ��������� ������, �� �������� �� ������ "���������", ��� ����� �������� ���������.
						<br><br>
						<a style="font-weight: bold;">�������� �������</a><br>
						������ �� ������� � "<a style="font-weight: bold;">��������</a>", ������� ��������� � ������� ����. ��� �� ����� ��� ����������� �������� ��� ��������, � ��� �� �� ��������. <br>
						�������� "Add", ��������� �������� � ������ �� ���.<br>
						������ ������������ � ������� ����, � ��������� � "�������", ����� ���� "Add".<br>
						� ��������� �� ������ ������� �������� ������. (��� ��� ���)<br>
						� ����������� ��������� �������� �������� � �����������. ���� �������� � �� �������� ��������� � ������� ���� -> ��������.<br>
						� "������", �� ������ ������ �� ������ �� ������.<br>
						����� �������� ���� ���������� �������, � �������� ������ "���������".
					</div>
				</div>

				<div class="info-card">
					<div class="headline">
						���������� IP
					</div>
					<div class="text">
						text
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