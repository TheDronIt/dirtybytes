<?php
session_start();

if ($_SESSION['auth'] == true)
{
	header("Location: /admin");
}
else
{
	?>
	<html>
	  <head>
	    <title>Admin Panel Login</title>
	    <link rel='stylesheet' type='text/css' href='/include/css/normalize.css'>
	    <link rel='stylesheet' type='text/css' href='/include/css/admin.css'>
	  </head>
	  <body>
	  <form method='POST' action='verification.php'>

	    <div class='center'>
	    	<div class='text'>Login</div>
	    	<div>
				<input class='login_input' name='login' type='textarea' placeholder='Login' required>
	    	</div>
	    	<div class='text'>Password</div>
	    	<div>
				<input class='login_input' name='password' type='password' placeholder='Password' required>
	    	</div>
	    </div>
	    <div class='submit'>
			<a style='color:black; padding-right: 30px;' href='/'>Back</a>
	    	<button class='login_submit' type='submit'>Login</button>
	    	<a style='color:black; padding-left: 30px;' href='forget.php'>Forget</a>
	    </div>
	  </form>  
	  </body>
	</html>
	<?
}
?>