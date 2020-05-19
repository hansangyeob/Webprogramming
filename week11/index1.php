<?php
    session_start();
    if (!isset($_SESSION['Userdata']['Username'])){
        header("location: login.php");
        exit;
    }
?>
Congrats <?php echo $_SESSION['Userdata']['Username'] ?>. You have sucessfully logged in. <a href="logout.php"> Click here </a> to log out. 
