
<?php
include('../admin/connect/connect.php');
if (isset($_POST['update'])) {
$id=$_POST['id'];   
$drugcount=$_POST['drugcountNew'];
$drugcount1=$_POST['drugcountNew1'];
$less=$drugcount - $drugcount1;
$result=mysqli_query($con,"UPDATE medicine SET drugcount = '$less'  WHERE id = '$id' ");
header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title> عرض الادوية المتوفرة  </title>
	<link rel="stylesheet" href="../admin/css/main.css">
</head>
<body>
<section class="container">
<header class="head">
<img src="../admin/images/11.jpg" class="img-responsive center-block">
</header>
<center class="return"><a href="../worker/user/logout.php" >Exit </a></center>
<center class="return"><a href="../worker/workers/show_druge.php" >show medicine </a></center>
<center class="return"><a href="index.php" > Back to the home page </a></center>
<div class="middle" style="background:none;">
 <center><div id="search">
            <?php include '../admin/search.php'; ?>
</div>
</center>
<?php include 'fullSearch.php'; ?>
</div>
<?php
include('../admin/connect/connect.php');
$sql="SELECT * FROM medicine";
$result=mysqli_query($con,$sql);
?>
<center class="mytable" id="me"><table border="1" cellspacing="0" cellpadding="5">
<tr class="title"> 
<td>Name drug</td> 
<td>type </td>
<td>Origin </td>
<td>Production Date </td>
<td>Expiry date </td>
<td>the price </td>
<td>Quantity </td>
<td>Medicine withdrawal</td> 
</tr>
<?php
while ($row=mysqli_fetch_array($result)) {echo'<tr class="data">';
$drugcount =$row['drugcount'];
if ($drugcount <= 0) {
echo'<tr class="title" style="display:none;"> </tr>';
	echo"<div class='alert'><h1>Warning, you have run out of medicine <b>".$row['drugName'] . "</b> Please add a new medicine quantity </h1><br>
	</div>";
}

$endDate =$row['drugEndDate'];
$myDate =Date('Y-m-d');
if( ($endDate == $myDate) ||($endDate < $myDate) )
{	echo'<tr class="title" style="display:none;"> </tr>';
	echo"<div class='alert'><h1>Warning you have expired medicine  </h1><br>
	<p> this medicine  <b>".$row['drugName'] . "</b> Expired on <br><br>  
	<span>".$row['drugEndDate'] ."</span></p></div>";
}

echo'<td>'.$row['drugName'] .'</td>';
echo'<td>'.$row['drugType'].'</td>';
echo'<td>'.$row['drugOriginator'] .'</td>';
echo'<td>'.$row['drugMadeDate'] .'</td>';
echo'<td>'.$row['drugEndDate'] .'</td>';
echo'<td>'.$row['drugPrice']."  rs" .'</td>';
echo'<td>'.$row['drugcount'] .'</td>';
echo"<td class='active'> <a href='../worker/workers/lose.php?id=$row[id]'> Medicine withdrawal</a></td>";
echo'</tr>';
}
echo'</center></table>';
mysqli_close($con);
?>
</section>
</body>
</html>
