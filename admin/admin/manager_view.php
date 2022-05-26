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
	<title> View manager information  </title>
	<link rel="stylesheet"  href="../css/main.css">
</head>
<body>
<section class="container">
<center class="mytable">
<div class="myLink">
<a href="../index.php" >Back to the control panel </a>
</div>

<?php
include('../connect/connect.php');
$sql="  SELECT * FROM mange ";
$result=mysqli_query($con,$sql);
echo'<table border="1" cellspacing="0" cellpadding="0">';
echo '<tr class="title"> 
<td>manager name</td> 
<td>password</td>
<td>Edit information</td>
<td>Delete information</td></tr>';
while ($row=mysqli_fetch_array($result)) {
echo'<tr class="data">';
echo'<td>'.$row['userName'].'</td>';
echo'<td>'.$row['passWord'].'</td>';
echo"<td class='active'> <a href='manager_edit.php ?id =$row[id]'> Edit information</a></td>";
echo"<td class='active'> <a href='manager_delete.php '> Delete information </a></td>";
echo'</tr>';
}
echo'</table>';
mysqli_close($con);
?>
</center>
</section>
</body>
</html>