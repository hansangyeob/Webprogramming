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
                <li><a href="a5.php">Home</a></li>
                <li><a href="cart_admin.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>
        </div>
    </div>


<h1>Purchase</h1>
<form action="purchase.php" method="post">
    <label> Name:</label>
        <input type="text" id="name" name="name">
        <span class="error">* <?php echo $nameErr;?></span>

        <br>

        <label>Email:</label>
        <input type=text name='email'/>
        <span class="error">* <?php echo $emailErr;?></span>
        
        <br>

        <label>Mobile:</label>
        <input type=text name='mobile'/>
        <span class="error">* <?php echo $mobileErr;?></span>

        <br>

        <input type=submit id ="submit_booking" value='Buy now!'>
       
        <br><br>

      </form>

</body>

</html>