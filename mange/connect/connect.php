
<?php
$con = mysqli_connect("localhost","root","","medicine");
if(mysqli_connect_errno())
{
	echo "failed to connect to mysql :".mysqli_connect_error();
}
?>