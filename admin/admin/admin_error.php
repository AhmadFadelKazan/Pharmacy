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
	<title>رسالة خطأ</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<section class="container">
<center>
<div class="message"> رجاءا قم بادخال اسم الادمن  وكلمةالسر بصورة صحيحة 
<a href="../admin/admin_direct.php"> اعادة تسجيل الدخول</a>
</div>
</center>
</section>
</body>
</html>

