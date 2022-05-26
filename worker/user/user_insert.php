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
	<title>Add data to the database</title>
</head>
<body>
<?php
include("../../admin/connect/connect.php");
$userName=$_POST['username'];
$passWord=$_POST['password'];
$sql=" INSERT INTO user (userName,passWord)
VALUES('$userName','$passWord') ";
mysqli_query($con,$sql);
echo"The information has been successfully added";
mysqli_close($con);
header("Location:user_view.php");
?>
</body>
</html>

