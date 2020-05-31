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

<div align="center">
<h1>Register</h1>
<br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
    <input type="text" name ="username_login" placeholder="Usrname">
    <?php echo $errmess1 ?>
    <br>
    <input type="password" name ="password_login" placeholder="Password">
    <?php echo $errmess2 ?>
    <br>
    <input type="password" name ="pwd-repeat" placeholder="Repeat Password">
    <?php echo $errmess3 ?>
    <br>
    <br>
    <button type="submit" name="signup-submit"> Register</button>
</form>
<p>
    Already a member? <a href="login.php">login here! </a>
</p>
</div>
</body>

</html>