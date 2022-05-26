<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../user/user_direct.php");}
?>
<?php
include('../../admin/connect/connect.php');
if (isset($_POST['update'])) {
$id=$_POST['id'];   
$nameDrNew=$_POST['nameDr'];
$priceDrNew=$_POST['priceDr'];
$drugcount=$_POST['drugcountNew'];
$drugcount1=$_POST['drugcountNew1'];
if ($drugcount1 > $drugcount) {
	echo"<div class='alert'><h1>Sorry, this quantity is greater than the available quantity, please withdraw a smaller quantity </h1><br>";
}
else{
	$less=$drugcount - $drugcount1;
	$result=mysqli_query($con,"UPDATE medicine SET drugcount = '$less'  WHERE id = '$id' ");
	$sql=mysqli_query($con,"INSERT INTO selling(drugName,drugPrice,drugLose)VALUES('$nameDrNew','$priceDrNew','$drugcount1')");
	mysqli_query($con,$sql);
	echo"The information has been successfully added";
	mysqli_close($con);
	header("location: ../index.php");
}
}
?>

<?php
include('../../admin/connect/connect.php');
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM medicine WHERE id=$id");
while ($row=mysqli_fetch_array($result)) {
$drugCountNew=$row['drugcount'];
$drugNameNew=$row['drugName'];
$drugPriceNew=$row['drugPrice'];
}
$myDate = Date('Y / m / d');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" >
<title>medicine withdrawal</title>
	<link rel="stylesheet" href="../../admin/css/main.css">

</head>
<body>
<section class="container">
<center class="return"><a href="../index.php" > Back to the home page </a></center>
<div class="add_drug selldrug">

<center><h1>medicine withdrawal </h1></center>

<form name="form" action=""  method="POST">
<table>
<tr>
<td class="label">a lot of college</td>    
<td><input type="text" id="fullCount" readonly="" name="drugcountNew" value='<?php echo $drugCountNew; ?>'></td>
</tr>
   
<tr>
<td class="label">Drawn number</td>    
<td><input type="number" placeholder="Enter the amount you want to withdraw" name="drugcountNew1" value='' id="loseCount"></td>
</tr>
<tr>
<td class="label"> neme drug</td>  
<td><input type="text" name="nameDr" value="<?php echo $drugNameNew; ?>"></td>
</tr>
<tr style="display: none;">
<td class="label">the price </td>  <td><input type="text" id="price" name="priceDr" value="<?php echo $drugPriceNew; ?>"></td>
</tr>

<tr><td class="tit title">The final price</td>
<td class="value"><input type="text" id="finalPrice" name="priceDr" value=""></td></tr>

</table>
 <input type="hidden" name="id" value='<?php echo $_GET['id']; ?>'>
    <button type="submit"  class="btn-send" name="update">withdrawal</button> 
</form>

</section>	
<script>
var loseCount = document.getElementById("loseCount"),//Drawn number
    price = document.getElementById("price"),//The price
    finalPrice = document.getElementById("finalPrice");//The final price  
    
loseCount.onkeyup = function () {"use strict";
        finalPrice.value = loseCount.value * price.value;
                          };
</script>
</body>
</html>