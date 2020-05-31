<!DOCTYPE html>
<html lang="en">


<?php
require "header.php";
include "connection.php";
?>

<body>


    <!--class="nav-main-bar" -->
    <div class="top-nav-bar">
        <img src="../img/logo_dummy.png" alt="logo" class="logo"> 
        <div class="menu-bar">
            <ul>
                <li><a href="a5_admin.php">Home</a></li>
                <li><a href="upload_img_admin.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
                <li><a href="signup_admin.php">Sign up</a></li>
                <li><a href="logout.php">Log out</a></li>
                <li><a href="manage.php">Manage</a></li>
            </ul>
        </div>
    </div>


    <h1 style="margin-left:25rem; margin-top:5rem; margin-bottom:10rem; ">WELCOME to ANTIQUE STORE, <?php echo $_SESSION['username_login']?> 🌕!</h1>
    <h3 style="margin-left:65rem;">Stay Antique</h3>
    <h3 style="margin-left:65rem; margin-bottom:5rem;">Live Antique</h3>
    
    
  
</body>



</html>