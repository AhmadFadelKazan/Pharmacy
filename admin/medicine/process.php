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
	<title>اضافة البيانات الى قاعدة البيانات</title>
</head>
<body>
<?php
include("../connect/connect.php");
$drugName=$_POST['drugName'];
$drugType=$_POST['drugType'];
$drugPrice=$_POST['drugPrice'];
$drugcount=$_POST['drugcount'];
$drugOriginator=$_POST['drugOriginator'];
$drugMadeDate=$_POST['drugMadeDate'];
$drugEndDate=$_POST['drugEndDate'];

$result = mysqli_query($con,"SELECT * FROM medicine where drugName ='$drugName'");
while ($row=mysqli_fetch_array($result)) {
	$your_Name=$row['drugName'];
}


if ($drugName == $your_Name )
{
header("Location:warning.php?drugName=$drugName");
exit();
}

else{

$sql=" INSERT INTO medicine (drugName,drugType,drugPrice,drugcount,drugOriginator,drugMadeDate,drugEndDate)
VALUES('$drugName','$drugType','$drugPrice','$drugcount','$drugOriginator','$drugMadeDate','$drugEndDate')";

mysqli_query($con,$sql);
echo"تمت اضافة المعلومات بنجاج";
mysqli_close($con);
header("Location:view_medicine.php");
}
?>
</body>
</html>

