<?php
session_start();

$name = '';
$update = false;

// Create connection
$servername = "sql104.epizy.com";
$username1 = "epiz_25803616";
$password_sql = "NJsCG4o3dKXuOwD";
$dbName = "epiz_25803616_s3821179";

//$conn = mysqli_connect($servername, $username1, $password_sql, $dbName);
//$err = 0;

$mysqli = new mysqli($servername, $username1, $password_sql, $dbName);

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $mysqli -> query("INSERT INTO data (name) VALUES ('$name')")
                or die($mysqli->error);
    
    $_SESSION['message'] = "User has been saved!";
    $_SESSION['msg_type'] = "success";

    header("Location : manage.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli -> query("DELETE FROM data WHERE id='$id'")or die($mysqli->error);
    
    $_SESSION['message'] = "User has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("Location : manage.php");
    
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];

    $update = true;
    $result = $mysqli -> query("SELECT * FROM data WHERE id=$id")or die($mysqli->error);
    
    if (count($result)==1){
        $row = $result -> fetch_array();
        $name = $row['name'];
    }

}

if (isset($_POST['update'])){
    $name = $_POST['name'];
    
    $mysqli -> query("UPDATE data SET name = '$name'")or die($mysqli->error);

    $_SESSION['message'] = "User has been updated!";

    header("Location: manage.php");

}



//register
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameinput =$_POST['username_login'];
    $userpasswordinput = $_POST['password_login'];
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
        $_SESSION['username_login'] = $usernameinput;
        $_SESSION['password_login'] = $userpasswordinput;
        $_SESSION['pwd-repeat'] = $userpasswordinput_2;
        $sql = "INSERT INTO data (name,password_1) VALUES('$usernameinput','$userpasswordinput')";
        mysqli_query($conn,$sql);
        header("Location:a5_admin.php");
    }
}// end of request_method


//purchase file input validation
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
        $errorFound++;
    } else{
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z ]*$/", $name)){
                $nameErr = "Only letters and whitespace are allowed.";
                $errorFound++;
               }if($errorFound ==0){
             
       }
    }

    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
        $errorFound++;
      } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
               $emailErr = "Invalid email format";
               $errorFound++;
              }if($errorFound ==0){
       
        }
        }  



    if (empty($_POST['mobile'])) {
        $mobileErr = "Mobile is required";
        $errorFound++;
      } else {
            $mobile = $_POST['mobile'];
            if (!preg_match('/^\d{10}$/',$mobile)){
                $mobileErr = "Invalid moblie format. Please type 10 digit only.";
                $errorFound++;
               }if($errorFound ==0){
    echo '<script>alert("Purchase Done!")</script>';
    }
      }




}//end of if statement    
?>

