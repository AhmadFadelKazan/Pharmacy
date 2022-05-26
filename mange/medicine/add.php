<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../admi/admi_direct.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Add medicine</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<section class="container">
<center class="return"><a href="../index.php" >Back to the control panel</a></center>
<!-- ===================================== -->
<div class="add_drug">
    <h1>Adding a new medicine</h1>
    <form action="process.php" method="POST">
    <table>
    <tr><td class="label">Medicament name</td>   <td><input type="text" name="drugName" required="" placeholder="Enter Medicament name"></td></tr>
    <tr><td class="label">Type</td> <td><input type="text" name="drugType" required="" placeholder="Enter the type of medication"></td></tr>
    <tr><td class="label">Price</td> <td><input type="number" name="drugPrice" required="" placeholder="Enter the medicament price"></td></tr>
    <tr><td class="label">Quantity</td> <td><input type="number" name="drugcount" required="" placeholder="Enter the amount of medicine"></td></tr>
    <tr><td class="label">Origin</td> <td><input type="text" name="drugOriginator" required="" placeholder="Enter the origin of the drug"></td></tr>
    <tr><td class="label">Production Date</td><td><input type="date" name="drugMadeDate" required="" placeholder="Enter the date of production"></td></tr>
    <tr><td class="label">Expiry date</td><td><input type="date" name="drugEndDate" required="" placeholder="Enter the expiry date"></td></tr>
    </table>
       <button class="btn-send">Add</button> 
    </form>
</div>
</section>
</body>
</html>