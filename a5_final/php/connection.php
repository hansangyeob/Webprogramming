<?php
$servername = "sql104.epizy.com";
$username1 = "epiz_25803616";
$password_sql = "NJsCG4o3dKXuOwD";
$dbName = "epiz_25803616_s3821179";
//$servername = 'localhost';
//$port = '3306';
//$username1 ='root';
//$password_sql ='root';
//$dbName=='myDB';

// Create connection
$conn = mysqli_connect($servername, $username1,$password_sql,$dbName);


 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo 'connected successfully';


//create database


mysqli_close($conn);
?>