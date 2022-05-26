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
   
	<title>Enter the page</title>
</head>
<body>
<?php
include("../../admin/connect/connect.php");
$sql=" select * from user";
$result=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($result)) {
$var1=$row['userName'];
$var2=$row['passWord'];
}
$userName=$_POST['username'];
$passWord=$_POST['password'];
if ($userName==$var1 && $passWord==$var2) {
	$_SESSION['me']='YES';
	echo "You are logged in successfully";
	header("Location:../../worker/index.php");
}
else{
	@session_start();
	$_SESSION['me']='NO';
	include("../../worker/user/user_error.php");   
}
?>
</body>
</html>

