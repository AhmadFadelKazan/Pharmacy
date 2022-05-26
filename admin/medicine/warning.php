<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../admin/admin_direct.php");}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>نظام التسجيل</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
 </head>
<body>
<section class="container">
<div class="viewPage">
<center class="return"><a href="../index.php" >عودة الى  الصفحة الرئيسية </a></center>
<div class="warning">
<?php
echo("<div class='waring'> تنبيه هذا الدواء ".$_GET['drugName']." مسجل بقاعدة البيانات </div>");
?>
</div>
</div>
</section>
</body>
</html>