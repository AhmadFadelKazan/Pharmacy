<?php
session_start();
if($_SESSION['me']!='YES'){header("location:../mange/mange_direct.php");}
?>
<?php
include('../connect/connect.php');
if (isset($_POST['update'])) {
$id=$_POST['id'];   
$userName=$_POST['userNameNew'];
$passWord=$_POST['passWordNew'];
$result=mysqli_query($con,"UPDATE mange SET userName = '$userName' ,passWord = '$passWord'   WHERE id = '$id' ");
header("location: admi_view.php");
}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM mange WHERE id=$id");
while ($row=mysqli_fetch_array($result)) {
$userNameNew=$row['userName'];
$passWordNew=$row['passWord'] ;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" >
<title>تعديل معلومات الادمن</title>
	<link rel="stylesheet"  href="../css/main.css">
</head>
<body >
<section class="container">
<center class="mytable">
<div class="mange  "> 
<h2 class="text-center about" >تعديل معلومات الادمن</h2>
<form name="form1" action="" method="POST"  >
<table border="1" cellspacing="0" cellpadding="0">
<tr class="title">
<td>اسم الادمن</td>
<td>كلمة السر</td>
</tr>

<tr class="data">
<td><input type="text" name="userNameNew"        value='<?php echo $userNameNew; ?>' ></td>
<td><input type="text" name="passWordNew"      value='<?php echo $passWordNew; ?>'     ></td>
</tr>

</table>
<input type="hidden" name="id"       value='<?php echo $_GET['id']; ?>'>
<button type="submit" name="update"   class="btn-update">update</button> 
</form>
</div>
</section>
</center>
</body>
</html>