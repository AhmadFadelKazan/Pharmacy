<?php
session_start();
if($_SESSION['me']!='YES'){header("location:mange/mange_direct.php");}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>my pharmacy</title>
<link rel="stylesheet" href="css/main.css">

</head>
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
            <li><a href="medicine/add.php">Add medicine</a></li>
            <li><a href="medicine/delete_medicine.php">Edit medicine</a></li>
            <li><a href="medicine/delete_medicine.php">Delete medicine</a></li>
            <li><a href="medicine/show_d.php">Show medicine</a></li>
            
            <li><a href="mange/logout.php"">Exit </a></li>
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
            
            <li><a href="https://www.instagram.com/my_pharmcy/">Instagram</a></li>
            <li><a href="https://web.telegram.org/k/">Telgram</a></li>
        </ul>
    </footer> 


</section>

</body>
</html>