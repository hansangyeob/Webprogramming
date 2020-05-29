
<?php

session_start();
# This is for resetting the session
if (isset($_POST['session-reset'])) {
    session_destroy();
    header("Location:login.php");
}


require("connection.php");

#preshow my arrays for debudding
if (isset($_POST['login-submit'])){
    $uname12 = $_POST['username'];
    $password12 = $_POST['password'];
    $_SESSION['username'] = $uname12;
    $_SESSION['password'] = $password12;   
    }

    function preShow( $arr, $returnAsString=false ) {
        $ret  = '<pre>' . print_r($arr, true) . '</pre>';
        if ($returnAsString)
             return $ret;
       else 
            echo $ret; 
    }
    

    echo "<h5 style='color:red;'>Thie is for POST area</h5>";
    preShow($_POST);
    echo "<h5 style='color:red;'>Thie is for SESSION area</h5>";
    preShow($_SESSION); 
  
   ?>
