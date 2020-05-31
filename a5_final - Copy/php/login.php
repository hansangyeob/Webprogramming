<!DOCTYPE html>
<html lang="en">

<?php
require "header.php";
include "conneciton.php";
?>


<body>

    <!--class="nav-main-bar" -->
    <div class="top-nav-bar">
        <img src="../img/logo_dummy.png" alt="logo" class="logo"> 
        <div class="menu-bar">
 <ul>
             <ul>
                <li><a href="a5.php">Home</a></li>
                <li><a href="upload_img.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>
            </ul>
        </div>
    </div>

<form action="process.php" method="post" name="Login_Form">
    
   <div align="center">  
    <h3 align="center" >Log in</h3>
     <?php
     if(isset($_SESSION['message'])){ 
     echo $_SESSION['message'];
     unset($_SESSION['message']);
     }
     ?>
    <br>
    <input name="username_login" type="text" placeholder="Enter Your User Name"><?php echo $errurname;?>
    <br>
    <input name="password_login" type="password" class="Input" placeholder="Enter Your Password"><?php echo $errpasword;?>
    <br>
    <br>
    <input name="login-submit" type="submit" value="LOGIN" class="btn-login" >
    <br>
    <br>
    <p>
        Not yet a member? <a href="signup_admin.php"> Sign up!</a>
    </p>
    <br><br>
  
    </div>
</form>

</body>



</html>


