<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../admin/admin_direct.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>اضافة دواء</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<section class="container">
<center class="return"><a href="../index.php" >عودة الى لوحة التحكم </a></center>
<!-- ===================================== -->
<div class="add_drug">
    <h1>اضافة دواء جديد</h1>
    <form action="process.php" method="POST">
    <table>
    <tr><td class="label">Name drug</td>   <td><input type="text" name="drugName" required="" placeholder="ادخل اسم الدواء"></td></tr>
    <tr><td class="label">Type</td>     <td><input type="text" name="drugType" required="" placeholder="ادخل نوع الدواء"></td></tr>
    <tr><td class="label">the price </td>     <td><input type="number" name="drugPrice" required="" placeholder="ادخل سعر الدواء"></td></tr>
    <tr><td class="label">Quantity</td>     <td><input type="number" name="drugcount" required="" placeholder="ادخل كمية الدواء"></td></tr>
    <tr><td class="label">المنشأ</td>     <td><input type="text" name="drugOriginator" required="" placeholder="ادخل منشأ الدواء"></td></tr>
    <tr><td class="label">تاريخ الانتاج</td><td><input type="date" name="drugMadeDate" required="" placeholder="ادخل تاريخ انتاج الدواء"></td></tr>
    <tr><td class="label">تاريخ الانتهاء</td><td><input type="date" name="drugEndDate" required="" placeholder="ادخل تاريخ انتهاء الدواء"></td></tr>
    </table>
       <button class="btn-send">اضافة</button> 
    </form>
</div>
</section>
</body>
</html>