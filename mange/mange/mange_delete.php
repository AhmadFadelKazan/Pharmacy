<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../mange/mange_direct.php");}
?>
<?php
include('../connect/connect.php');
$id=$_GET['id'];
$sql=" DELETE FROM mange WHERE id= $id";
$result=mysqli_query($con,$sql);
header("Location:mange_view.php");
?>