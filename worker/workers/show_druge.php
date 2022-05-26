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
	<title> View the medicines sold   </title>
	<link rel="stylesheet"  href="../../admin/css/main.css">
	<style type="text/css">
		#sum{background: #eee;padding: 20px;}
	</style>
</head>
<body>
<section class="container">
<center class="mytable">
<div class="myLink">
	<a href="../index.php" >Back to the home page </a>
</div>



<div id="id_divprint">

<table border="1" width="100%" cellpadding="5" cellspacing="0">
<tr class="title"> 
<td>Name medicine</td> 
<td>withdrawn quantity</td> 
<td> the price</td>
</tr>
<?php
include('../../admin/connect/connect.php');
$sql="SELECT * FROM selling";
$result=mysqli_query($con,$sql);
$sum = 0;
while ($row=mysqli_fetch_array($result)) 
{echo'<tr class="data">';
$sum += $row['drugPrice']; 
echo" <td>".$row['drugName']; "</td>";
echo" <td>".$row['drugLose']; "</td>";
echo" <td id=''>".$row['drugPrice'].' SR ';"</td>";
echo'</tr>';
}
echo'<tr>';
echo'<td class="sum" colspan="2">Total</td> ';
echo'<td class="mytd">';
echo"<div class='sum'>";echo $sum.' SR ';"</div>";
echo'</td>';
echo'</tr>';
echo'</table>';
mysqli_close($con);
?>
			    
</div>
<button class="btn-send"><a href="#" title="print" onclick="printSelection(document.getElementById('id_divprint'));return false;">Print</a>

<?php
include('../../admin/connect/connect.php');
$sql="SELECT * FROM selling";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

echo"<button class='btn-send'> <a href='delete_selling.php?id=$row[id]'> delete</a></button>";
echo'</table>';
mysqli_close($con);
?>


</button>
</center>
</section>

<script>
	function printSelection(node) {
    "use strict";
    var content = node.innerHTML,
		pwin = window.open('', 'print_content', 'width = 400, height = 400');
    pwin.document.open();
    pwin.document.write('<html><head><style>body{background: #fff;direction:rtl;}</style>');
    pwin.document.write('<title> my pharmacy</title>');
    pwin.document.write('</head><body onload="window.print()">' + content + '</body></html>');
    pwin.document.close();
    setTimeout(function () {pwin.close(); }, 1000);
}

</script>
</body>
</html>