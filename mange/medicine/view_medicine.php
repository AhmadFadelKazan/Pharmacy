<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../admi/admi_direct.php");}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title> View available medicines  </title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<section class="container">
<center class="return"><a href="../index.php" >Back to the control panel </a></center>
<?php
include('../connect/connect.php');
$sql="  SELECT * FROM medicine";
$result=mysqli_query($con,$sql);
echo"<center class='A'><h2>View available medicines</h2></center>";
echo'<center class="mytable"><table border="1" cellspacing="0" cellpadding="5">';
echo'<tr class="title"> 
<td>medicament name</td> 
<td>Type </td>
<td>Origin </td>
<td>Production Date</td> 
<td>Expiry date</td> 
<td>Price </td>
<td>Quantity </td>
<td>Edit information</td>
<td>Delete medicament</td></tr>';
while ($row=mysqli_fetch_array($result)) {echo'<tr class="data">';
$endDate =$row['drugEndDate'];
$myDate =Date('Y-m-d');
if( ($endDate == $myDate) ||($endDate < $myDate) )
{	echo'<tr class="title" style="display:none;"> </tr>';
	echo"<div class='alert'><h1>Warning, you have an expired medicine  </h1><br>
	<p> this medicine  <b>".$row['drugName'] . "</b> Expired on <br><br>  
	<span>".$row['drugEndDate'] ."</span></p></div>";
}

echo'<td>'.$row['drugName'] .'</td>';
echo'<td>'.$row['drugType'].'</td>';
echo'<td>'.$row['drugOriginator'] .'</td>';
echo'<td>'.$row['drugMadeDate'] .'</td>';
echo'<td>'.$row['drugEndDate'] .'</td>';
echo'<td>'.$row['drugPrice']."  SR" .'</td>';
echo'<td>'.$row['drugcount'] .'</td>';
echo"<td class='active'> <a href='edit_medicine.php?id=$row[id]'> Edit information</a></td>";
echo"<td class='active'> <a href='delete_medicine.php?id=$row[id]'>Delete medicament</a></td>";
echo'</tr>';
}
echo'</center></table>';
mysqli_close($con);
?>
</section>
</body>
</html>