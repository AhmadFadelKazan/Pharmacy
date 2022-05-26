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
	<title>new registration</title>
	<link rel="stylesheet" href="../../admin/css/main.css">
</head>
<body>
<section class="container">
<center>
<div class="myLink">
<a href="../../admin/index.php">Back to the home page </a>
</div>
<div class="admin add_drug">
	<h2>Add a new pharmacist</h2>
<form action="user_insert.php" method="post">
<table>
<tr><td class="label">Username</td><td class="label">Password</td></tr>
<tr>
	<td><input type="text" name="username" placeholder="Enter username"  required=""></td>
	<td><input type="password" name="password" placeholder="Enter password" required=""></td></tr>
</table>
<button type="submit" class="btn-send">sign in</button>
</form>
</div>
</center>
</section>
</body>
</html>