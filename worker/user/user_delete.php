<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../user/user_direct.php");}
?>
<?php
include('../../admin/connect/connect.php');
$id=$_GET['id'];
$sql=" DELETE FROM user WHERE id= $id";
$result=mysqli_query($con,$sql);
header("Location:user_view.php");
?>