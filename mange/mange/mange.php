<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../mange/mange_direct.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Login</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<section class="container">
<center>
<div class="myLink">
<a href="../index.php" >Back to the control panel </a>
</div>
<div class="mange add_drug">
	<h2>اضافة ادمن جديد</h2>
<form action="mange_insert.php" method="post">
<table>
<tr><td class="label">اسم الادمن</td><td class="label">كلمة السر</td></tr>
<tr>
	<td><input type="text" name="username" placeholder="ادخل اسم الادمن"  required=""></td>
	<td><input type="password" name="password" placeholder="ادخل كلمة السر" required=""></td></tr>
</table>
<button type="submit" class="btn-send">Login</button>
</form>
</div>
</center>
</section>
</body>
</html>