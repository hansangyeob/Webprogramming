<?php
$servername = "localhost";
$username = "root";
$password = "root";
$port = "3306";
$dbName = "myDB";

// Create connection
$conn = mysqli_connect("$servername:$port", $username,
 $password, $dbName);

 /*
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo 'connected successfully';
*/

/*
//create database
$sql = "CREATE DATABASE myDB";

if (mysqli_query($conn,$sql)){
echo "Databaes created successfully";
} else{
echo "Error creating database:" . mysqli_query($conn);
}
*/

// we can insert table
/* 
$sql = "CREATE TABLE students(
    fisrtName varchar(100),
    lastName varchar(100),
    studentID varchar(100),
    school varchar(100),
    enrolled year
    )";

if (mysqli_query($conn,$sql)){
    echo "Table students created successfully";
    } else{
    echo "Error creating database:" . mysqli_query($conn);
    }
*/

    // we can insert data
    /*
$sql = "INSERT INTO students 
VALUES ('Tony', 'Han', 's3821179','RMIT',2020)";
if (mysqli_query($conn,$sql)){
    echo "Table students INSERT successfully";
    } else{
    echo "Error creating database:" . mysqli_query($conn);
    }
*/

// selecting data
/*
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["fisrtName"]. " | " . $row["lastName"]. " |" . $row["studentID"]. "<br>";
    }
  } else {
    echo "0 results";
  }
*/
  $sql = "DELETE FROM students WHERE fisrtName= Tony";

  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

mysqli_close($conn);
?>