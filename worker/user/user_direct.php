<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>sign in</title>
	<link rel="stylesheet" href="../../admin/css/main.css">
</head>
<body>
<section class="container">
<center class="mid">
<div class=" admin add_drug">
	<h2>Welcome to the pharmacist login page</h2><h2><a href="../../login.php" style="text-decoration:none;">Back to the main registration page</a></h2>
<form action="user_direct_insert.php" method="post">
<table>
<tr ><td class="label">Username</td><td class="label">Password</td></tr>
<tr>
	<td><input type="text" name="username" placeholder="Enter the username"  required=""></td>
	<td><input type="password" name="password" placeholder="Enter the password" required=""></td></tr>
</table>
<button type="submit" class="btn-send">Login</button>
</form>
</div>
</center>
</section>
</body>
</html>