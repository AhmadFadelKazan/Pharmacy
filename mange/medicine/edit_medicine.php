<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../admi/admi_direct.php");}
?>
<?php
include('../connect/connect.php');
if (isset($_POST['update'])) {
$id=$_POST['id'];   
$drugName=$_POST['drugNameNew'];
$drugType=$_POST['drugTypeNew'];
$drugPrice=$_POST['drugPriceNew'];
$drugcount=$_POST['drugcountNew'];
$drugOriginator=$_POST['drugOriginatorNew'];
$drugMadeDate=$_POST['drugMadeDateNew'];
$drugEndDate=$_POST['drugEndDateNew'];
$result=mysqli_query($con,"UPDATE medicine SET drugName = '$drugName',drugType = '$drugType',
    drugPrice = '$drugPrice',drugcount = '$drugcount',drugOriginator = '$drugOriginator',
 drugMadeDate = '$drugMadeDate' ,drugEndDate = '$drugEndDate' WHERE id = '$id' ");
header("location: view_medicine.php");
}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM medicine WHERE id=$id");
while ($row=mysqli_fetch_array($result)) {
$drugNameNew=$row['drugName'];
$drugTypeNew=$row['drugType'];
$drugPriceNew=$row['drugPrice'];
$drugcountNew=$row['drugcount'];
$drugOriginatorNew=$row['drugOriginator'];
$drugMadeDateNew=$row['drugMadeDate'];
$drugEndDateNew=$row['drugEndDate'];
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" >
<title>Edit medication details</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<section class="container">
<div class="add_drug">
<center><h1  >Edit medication details </h1></center>
<form name="form1" action="" method="POST"  >
	 <table>
    <tr><td class="label">Medicament name</td><td><input type="text" name="drugNameNew" value='<?php echo $drugNameNew; ?>' ></td></tr>
    <tr><td class="label">Type</td><td><input type="text" name="drugTypeNew" value='<?php echo $drugTypeNew; ?>' ></td></tr>
    <tr><td class="label">price</td><td><input type="number" name="drugPriceNew" value='<?php echo $drugPriceNew; ?>'></td></tr>
    <tr><td class="label">Quantity</td><td><input type="number" name="drugcountNew" value='<?php echo $drugcountNew; ?>'></td></tr>
    <tr><td class="label">Origin</td><td><input type="text" name="drugOriginatorNew" value='<?php echo $drugOriginatorNew; ?>' ></td></tr>
    <tr><td class="label">Production Date</td><td><input type="date" name="drugMadeDateNew" value='<?php echo $drugMadeDateNew; ?>'></td></tr>
    <tr><td class="label">Expiry date</td><td><input type="date" name="drugEndDateNew" value='<?php echo $drugEndDateNew; ?>'></td></tr>
    </table>
    <input type="hidden" name="id" value='<?php echo $_GET['id']; ?>'>
	<button type="submit" name="update" class="btn-send">Update</button> 
</form>
</div>
</section>
</body>
</html>