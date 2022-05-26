<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../admin/admin_direct.php");}
?>
<?php
include('../connect/connect.php');
$id=$_GET['id'];
$sql=" DELETE FROM medicine WHERE id= $id";
$result=mysqli_query($con,$sql);
header("Location:view_medicine.php");
?>