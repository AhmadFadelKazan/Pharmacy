<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../admi/admi_direct.php");}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Recording system</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
 </head>
<body>
<section class="container">
<div class="viewPage">
<center class="return"><a href="../index.php" >Back to the home page </a></center>
<div class="warning">
<?php
echo("<div class='waring'> Caution this medicine ".$_GET['drugName']." Registered in the database </div>");
?>
</div>
</div>
</section>
</body>
</html>