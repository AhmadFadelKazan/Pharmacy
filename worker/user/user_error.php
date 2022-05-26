<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../user/user_direct.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>wrong message</title>
	<link rel="stylesheet" href="../../admin/css/main.css">
</head>
<body>
<section class="container">
<center>
<div class="message"> Please enter your username and password correctly 
<a href="../user/user_direct.php"> re-login</a>
</div>
</center>
</section>
</body>
</html>

