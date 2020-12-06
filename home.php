<?php
session_start();
$username = $_SESSION["username"];
?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<style>
    body{background-image:url("my.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    span{background-color:lightgreen;}
</style>
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="login-form.php">Logout</a></span>	<span class="login-signup"><a href="rspassword7.php">reset password</a></span>
		</div>
		<div class="page-content">Welcome
	<br><br>	<br><b>SUCCESS</b><br>"If you love what you doing, you will be successful."<?php echo $username;?></div>
	</div>
</BODY>
</HTML>