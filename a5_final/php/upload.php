<html>
<head> Inser Image to MySQL</head>


<body>
  <form action="" method="post" enctype ="multipart/form-date" >
      <input type="file" name = "userfile[]" value='' multiple=''>
      <input type="submit" name="submit" value ="Upload">
  </form>
  
</body>

<?php
// Create connection
$servername = "sql104.epizy.com";
$username1 = "epiz_25803616";
$password_sql = "NJsCG4o3dKXuOwD";
$dbName = "epiz_25803616_s3821179";

//$conn = mysqli_connect($servername, $username1, $password_sql, $dbName);
//$err = 0;

$mysqli = new mysqli($servername, $username1, $password_sql, $dbName);
$table = "category";

?>
//$_FILE global variable


</html>
