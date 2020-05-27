<?php

if(isset($_POST['signup-submit'])){
    require "connection.php";

    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($password) || empty($passwordRepeat) ){
        header ("Location: ../signup.php?error=emptyfields&uid=".$username);
        exit();
      }
      else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        header ("Location: ../signup.php?error=invalidusername&uid=");
        exit();
    }else if($password !== $passwordRepeat){
        header ("Location: ../signup.php?error=passwordcheck&uid=".$username);
        exit();
    }
    else{
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqlit_stmt_prepare($stmt,$spl)){
            header("Location: ../signup.php?error=eqlerror");
            exit();
        }
        else{
            mysqul_stmt_bind_param($stmt,"s",$username); //send data to database
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_row($stmt);
            if($resultCheck > 0){
                header("Location: ../signup.php?error=usertaken");
                exit();
            }else{
                $sql= "INSERT INTO users(uidUsers, pwdUsers) VALUES(?,?,?)";
                $stmt = mysqlit_stmt_init($conn);
            }if (!mysqli_stmt_prepate($stmt,$sql)){
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }

        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        }

}