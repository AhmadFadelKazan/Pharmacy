<?php
session_start();
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
include("../connect/connect.php");
$userName=$_POST['username'];
$passWord=$_POST['password'];
@$sql="SELECT * FROM mange WHERE userName='$userName'";
@$result=mysqli_query($con,$sql);
@$count=mysqli_num_rows($result);
if ($count > 0) {
while ($row=mysqli_fetch_array($result)) {
	$var1=$row['userName'];
	$var2=$row['passWord'];
	if ($passWord==$var2){
		$_SESSION['me']='YES';
		echo "You are logged in successfully";
		header("Location:../index.php");
	}
	else{
		$_SESSION['me']='NO';  
		echo "The password is incorrect";
	}
}
}
else{echo"Sorry, you are not registered with us";}
?>
</body>
</html>

