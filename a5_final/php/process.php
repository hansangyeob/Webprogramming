<?php
//get valuses passed from login.php
$username_login = $_POST['username_login'];
$password_login = $_POST['password_login'];

// to pervent mysql injection
$username_login = stripcslashes($username_login);
$password_login = stripcslashes($password_login);
$username_login = mysql_real_escape_string($username_login);
$password_login = mysql_real_escape_string($password_login);

//connect to the server and select db
$servername = "sql104.epizy.com";
$username1 = "epiz_25803616";
$password_sql = "NJsCG4o3dKXuOwD";
$dbName = "epiz_25803616_s3821179";
mysql_connect($servername,$username1,$password_sql,$dbName);

// Query the db for users
$result = mysql_query("SELECT * FROM data WHERE 'name' = '$username_login' and 'password_1'='$password_login'");

$row = mysql_fetch_array($result);
if ($row["name"] == $username_login && $row ["password_1"] == $password_login){
    echo "Login success!";
    header("Location: a5_admin.php");
}else{
    echo"Failed to login!";
}



?>