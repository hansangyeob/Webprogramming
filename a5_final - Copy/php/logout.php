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


<h1>Log out</h1>
<?php
   session_start();
   session_destroy();
   unset($_SESSION['username_login']);
   $_SESSION['message'] = "You are logged out!!";
   header("Location:login.php");
?>
</body>

<hr>

<?php
require "footer.php";
?>
</html>