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
	<title>اضافة البيانات الى قاعدة البيانات</title>
</head>
<body>
<?php
include("../connect/connect.php");
$userName=$_POST['username'];
$passWord=$_POST['password'];
$sql=" INSERT INTO mange (userName,passWord)
VALUES('$userName','$passWord') ";
mysqli_query($con,$sql);
echo"The information has been successfully added";
mysqli_close($con);
header("Location:admi_view.php");
?>
</body>
</html>

