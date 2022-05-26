<?php
session_start();
if($_SESSION['me']!='YES'){header("location:admin/admin_direct.php");}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>my pharmacy</title>
<link rel="stylesheet" href="css/main.css">
<body>
<section class="container">
    <header class="head">
        <img src="images/11.jpeg" class="img-responsive center-block">
    </header>
<!-- ===================================== -->
    <div class="middle">

        <div class="search">
            <?php include 'search.php'; ?>
         </div>
        <nav>
        <ul>
            <!--<li><a href="medicine/add.php">add drug</a></li>
            <li><a href="medicine/view_medicine.php">show durgs</a></li>-->
			<li><a href="">admin</a>
               <ul>
                   <li><a href="admin/manager.php">add manager</a> </li>
                   <li><a href="admin/manager_view.php">show manager</a></li>
                   <li><a href="../worker/user/user.php">add pharmacist</a></li>
                   <li><a href="../worker/user/user_view.php">show pharmacists</a></li>
               </ul>         
            </li>
            <li><a href="admin/logout.php"">Exit </a></li>
        </ul>  
    </nav>
    </div>

<?php include 'fullSearch.php';?>
</div>


<!-- ===================================== -->
    <footer class="footer">
        <h3>Contact us at</h3>
        <ul>
        <li><a href="https://www.facebook.com/profile.php?id=100079924157303">Facebook</a></li>
            <!--<li><a href="#">Tumblr</a></li>-->
            <li><a href="https://www.instagram.com/my_pharmcy/">Instagram</a></li>
            <li><a href="https://web.telegram.org/k/">Telgram</a></li>
        </ul>
    </footer> 


</section>

</body>
</html>