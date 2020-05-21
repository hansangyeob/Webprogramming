<html>
<body>

<?php  //"preShow()" function prints data and shape/structure of data:
   session_start(); 
   function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
         return $ret;
   else 
        echo $ret; 
}


 //Output your current file's source code:
   session_start();
   function printMyCode() {
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre class='mycode'><ol>";
    foreach ($lines as $line)
        echo '<li>'.rtrim(htmlentities($line)).'</li>';
    echo '</ol></pre>';
}


// to test user_input 
//trim = it will take away white space in my data 
//stripslashes = it will take away quote
session_start();
#include 'receipt9.php';
$errorFound = 0;
$cleanData = $_POST["name1,email1,mobile1,card1,expiry1,movie_id1,movie_day1,movie_hour1,STA1"];

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialChars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
  if (empty($_POST["name1"])) {
       $nameErr = "Name is required";
       $errorFound++;
     } else {
       $name = test_input($_POST["name1"]);
       if (!preg_match("/^[a-zA-Z ]*$/", $name)){
         $nameErr = "Only letters and whitespace are allowed.";
         $errorFound++;
        }
        if($errorFound ==0){
          $_SESSION["name1"]=$cleanData;
          header("Location: receipt9.php");
        }
    }


    if (empty($_POST["email1"])) {
      $emailErr = "Email is required";
      $errorFound++;
    } else {
      $email = test_input($_POST["email1"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $emailErr = "Invalid email format";
         $errorFound++;
      }
      if($errorFound ==0){
        $_SESSION["email1"]=$cleanData;
        header("Location: receipt9.php");
    }
  }
if (empty($_POST["mobile1"])) {
      $mobileErr = "Mobile is required";
      $errorFound++;
    } else {
      $mobile = test_input($_POST["mobile1"]);
      if (!preg_match('/^\d{10}$/',$mobile)){
         $mobileErr = "Invalid moblie format. Please type 10 digit only.";
         $errorFound++;
      }
      if($errorFound ==0){
        $_SESSION["mobile1"]=$cleanData;
        header("Location: receipt9.php");
  }
}

if (empty($_POST["card1"])) {
  $cardErr = "credit card is required";
  $errorFound++;
} else {
  $card = test_input($_POST["card1"]);
  if (!preg_match('/^\d{14,19 }$/',$card)){
     $cardErr = "Invalid credit card format. Please type 14~19 digit only.";
     $errorFound++;
  }
  if($errorFound ==0){
    $_SESSION["card1"]=$cleanData;
    header("Location: receipt9.php");
}
}

if (empty($_POST["expiry1"])) {
  $expiryErr = "expiry date is required";
  $errorFound++;
} else {
  $expiry = test_input($_POST["expiry1"]);
  if ($expiry < '2020-05-25'){
     $expiryErr = "Invalid expirydate!";
     $errorFound++;
  }
  if($errorFound ==0){
    $_SESSION["expiry1"]=$cleanData;
    header("Location: receipt9.php");
}
}


$moiveID = $_POST['movie_id1'];
if ($moiveID == 'select1'){
  $moiveIDErr = "Movie id required";
  $errorFound++;
} if($errorFound ==0){
  $_SESSION["movie_id1"]=$cleanData;
  header("Location: receipt9.php");
}

$moiveDay = $_POST['movie_day1'];
if ($moiveDay == 'select2'){
  $moiveDAYErr = "Movie day required";
  $errorFound++;
} if($errorFound ==0){
  $_SESSION["movie_day1"]=$cleanData;
  header("Location: receipt9.php");
}

$moiveHour = $_POST['movie_hour1'];
if ($moiveHour == 'select3'){
  $moiveHourErr = "Movie hour required";
  $errorFound++;
} if($errorFound ==0){
  $_SESSION["movie_hour1"]=$cleanData;
  header("Location: receipt9.php");
}

$seatSTA = $_POST['STA1'];
if ($seatSTA == '0' |'1'| '2' |'3' |'4' |'5' |'6' |'7' |'8' |'9' |'10'){
  $_SESSION["STA1"]=$cleanData;
  header("Location: receipt9.php");
}

}


    
// writing file and creating form.php"
// but this is not effective way
#$filename = "form.php";
#if ($numBytes = file_put_contents($filename,
#$linesOrBigString))
#    echo "File Saved, $numBytes written.";
#else 
#    echo "File Access Error. Does $filename exist 
#    and have 606 permissions?";
//we cas use 'LOCK_SH'

#$filename = "..\week9\processing.php";
#echo "<ol>";
#$fp = fopen($filename, "r");
#flock($fp, LOCK_SH);
#while ($line = fgets($fp))
#  echo "<li>$line</li>";
#flock($fp, LOCK_UN);
#fclose($fp);
#echo "</ol>";

# for html file, we use 'htmlspecialchars'
#$filename = "..\week9\\feedback.html";
#echo "<ol>";
#$fp = fopen($filename, "r");
#flock($fp, LOCK_SH);
#while ($line = fgets($fp))
#    $line = htmlspecialchars($line);
#  echo "<li>$line</li>";
#flock($fp, LOCK_UN);
#fclose($fp);
#echo "</ol>";

#this is for writing.
#$filename = ""text.txt";
#$fp = fopen($filename,"w");
#flock($fp, LOCK_EX); 

#fwrite($fp, "Here is the first line\n");
#fwrite($fp, "Here is the second line\n");

#flock($fp, LOCK_UN);
#fclose($fp);
?>

</body>
</html>