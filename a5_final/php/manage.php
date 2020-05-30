<!DOCTYPE html>
<html lang="en">

<?php
require "header.php";
include "connection.php";
?>

<body>
<?php #require_once "process.php"?>

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


<h1>Manage</h1>
<form action="process.php" method = "post">
    <label>Name</label>
    <input type="text" name = "name" value = "Enter your name">
    <button type="submit" name="save">Save</button>


</form>


</body>

<hr>

<?php
require "footer.php";
?>
</html>