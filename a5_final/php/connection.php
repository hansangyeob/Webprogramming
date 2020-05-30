<?php

session_start();
// Create connection

//$servername = "sql104.epizy.com";
//$username1 = "epiz_25803616";
//$password_sql = "NJsCG4o3dKXuOwD";
//$dbName = "epiz_25803616_s3821179";
$servername = 'localhost';
$port = '3306';
$username1 ='root';
$password_sql ='root';
$dbName=='myDB';



$conn = mysqli_connect($servername, $username1, $password_sql, $dbName);
$err = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameinput =$_POST['uid'];
    $userpasswordinput = $_POST['pwd'];
    $userpasswordinput_2 = $_POST['pwd-repeat'];
  // ensure that form fields are filled

    if(empty($usernameinput)) {
      $errmess1 = "Please fill out the ID";
      $err++;
    }if(!preg_match("/^[a-zA-Z ]*$/",$usernameinput)){
        $errmess1 = "Only letters and white space is alowed for ID";
        $err++;
    }if(empty($userpasswordinput)){
        $errmess2 = "Please fill out the password"; 
        $err++;
    }if($userpasswordinput != $userpasswordinput_2){
        $errmess3 = "Your passwords does not match";
        $err ++;
    }if ($err ==0){
        $_SESSION['uid'] = $usernameinput;
        $_SESSION['pwd'] = $userpasswordinput;
        $_SESSION['pwd-repeat'] = $userpasswordinput_2;
        $sql = "INSERT INTO users (uidUsers,pwdusers) VALUES('$usernameinput','$userpasswordinput')";
        mysqli_query($conn,$sql);
        header("Location:a5_admin.php");
    }
}// end of request_method


#manage section

if(isset($_POST['save'])){
    $name = $_POST['name'];

    $mysqli -> query("INSET INTO data (name) VALUES ('$name')")
                or die($mysqli->error);
}


?>