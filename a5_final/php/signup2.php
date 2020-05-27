<!DOCTYPE html>
<html lang="en">

<?php
require "header.php";
?>

<body>

    <!--class="nav-main-bar" -->
    <div class="top-nav-bar">
        <img src="../img/logo_dummy.png" alt="logo" class="logo"> 
        <div class="menu-bar">
            <ul>
            <li><a href="../php/a5.php">Home</a></li>
                <li><a href="../php/products.php">Products</a></li>
                <li><a href="../php/cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
                <li><a href="../php/signup.php">Sign up</a></li>
                <li><a href="../php/login.php">Log in</a></li>
            </ul>
        </div>
    </div>


<h1>signup</h1>
<form action="signupINC.php" method="post"> 
    <input type="text" name ="uid" placeholder="Usrname">
    <br>
    <input type="password" name ="pwd" placeholder="Password">
    <br>
    <input type="password" name ="pwd-repeat" placeholder="Repeat Password">
    <br>
    <button type="submit" name="signup-submit"> Sign up</button>
</form>

</body>

<hr>

<?php
require "footer.php";
?>
</html>