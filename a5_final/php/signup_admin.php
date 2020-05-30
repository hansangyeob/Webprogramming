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
                <li><a href="products_admin.php">Antique</a></li>
                <li><a href="cart_admin.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
                <li><a href="signup_admin.php">Manage</a></li>
                <li><a href="login_admin.php">Log in</a></li>
            </ul>
        </div>
    </div>


<h1>Add User</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
    <input type="text" name ="uid" placeholder="Usrname">
    <?php echo $errmess1 ?>
    <br>
    <input type="password" name ="pwd" placeholder="Password">
    <?php echo $errmess2 ?>
    <br>
    <input type="password" name ="pwd-repeat" placeholder="Repeat Password">
    <?php echo $errmess3 ?>
    <br>
    <button type="submit" name="signup-submit"> ADD up</button>
</form>
<p>
    Already a member? <a href="login.php">login here! </a>
</p>

</body>

<hr>

<?php
require "footer.php";
?>
</html>