<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../admin/admin_direct.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>log in</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<section class="container">
<center>
<div class="myLink">
<a href="../index.php" >Back to the home page </a>
</div>
<div class="mange add_drug">
	<h2>Add new manager</h2>
<form action="manager_insert.php" method="post">
<table>
<tr><td class="label">name manager</td><td class="label">password</td></tr>
<tr>
	<td><input type="text" name="username" placeholder="Enter username"  required=""></td>
	<td><input type="password" name="password" placeholder="Enter password" required=""></td></tr>
</table>
<button type="submit" class="btn-send">log in</button>
</form>
</div>
</center>
</section>
</body>
</html>