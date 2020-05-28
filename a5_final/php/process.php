<?php

$urname = $_POST["username"];
$pasword = $_POST["password"];

$urname = stripcslashes($urname);
$pasword = stripcslashes($pasword);
$urname = mysql_real_escape_string($urname);
$pasword = mysql_real_escape_string($pasword);

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
mysqli_connect($servername, $username1,$password_sql,$dbName);
mysql_select_db("epiz_25803616_s3821179");

$result = mysql_query("select * from users where uidUsers=='$urname' and pwdusers='$pasword'")
              or die("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $urname && $row['password'] == $pasword){
    echo "Login success!!".$row['username'];
} else{
    echo "failed to login!";
}

?>