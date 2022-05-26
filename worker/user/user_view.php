
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title> عرض معلومات المستخدم  </title>
	<link rel="stylesheet"  href="../../admin/css/main.css">
</head>
<body>
<section class="container">
<center class="mytable">
<div class="myLink">
<a href="../../admin/index.php" >Back to the control panel </a>
</div>

<?php
include('../../admin/connect/connect.php');
$sql="  SELECT * FROM user";
$result=mysqli_query($con,$sql);
echo'<table border="1" cellspacing="0" cellpadding="0">';
echo '<tr class="title"> 
<td>user name</td> 
<td>password</td>
<td>Edit information</td>
<td>Delete user</td></tr>';
while ($row=mysqli_fetch_array($result)) {
echo'<tr class="data">';
echo'<td>'.$row['userName'].'</td>';
echo'<td>'.$row['passWord'].'</td>';
echo"<td class='active'> <a href='user_edit.php?id=$row[id]'> Edit</a></td>";
echo"<td class='active'> <a href='user_delete.php?id=$row[id]'> Delete </a></td>";
echo'</tr>';
}
echo'</table>';
mysqli_close($con);
?>
</center>
</section>
</body>
</html>