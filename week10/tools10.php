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

#this is for .4 reset button
if (isset($_POST['session-reset']))
unset($_SESSION['CUST'],$_SESSION['MOVIE'],$_SESSION['SEATS']);


//Output your current file's source code:

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
      echo '<li>'.rtrim(htmlentities($line)).'</li>';
    echo '</ol></pre>';
}


// to test user_input 

#include 'receipt9.php';

# This is for getting array for $_post

$_SESSION["name"] = $_POST["name1"];
$_SESSION["email"] = $_POST["email1"];
$_SESSION["mobile"] = $_POST["mobile1"];
$_SESSION["card"]= $_POST["card1"];
$_SESSION["expiry"] = $_POST["expiry1"] ;

$_SESSION["movie_id"] = $_POST["movie_id1"];
$_SESSION["movie_day"] = $_POST["movie_day1"];
$_SESSION["movie_hour"] = $_POST["movie_hour1"];

$_SESSION["STA"] = $_POST["STA1"];
$_SESSION["STP"] = $_POST["STP1"];
$_SESSION["STC"] = $_POST["STC1"];
$_SESSION["FCA"] = $_POST["FCA1"];
$_SESSION["FCP"] = $_POST["FCP1"];
$_SESSION["FCC"] = $_POST["FCC1"];

$errorFound = 0;

$cleanData_CUST_name = $_POST['CUST']["name1"];
$cleanData_CUST_email = $_POST['CUST']["email1"];
$cleanData_CUST_mobile = $_POST['CUST']["mobile1"];
$cleanData_CUST_card = $_POST['CUST']["card1"];
$cleanData_CUST_expiry = $_POST['CUST']["expiry1"];

$cleanData_MOVIE_id = $_POST['MOVIE']["movie_id1"];
$cleanData_MOVIE_day = $_POST['MOVIE']["movie_day1"];
$cleanData_MOVIE_hour = $_POST['MOVIE']["movie_hour1"];

$cleanData_SEATS_sta = $_POST['SEATS']['STA1'];
$cleanData_SEATS_stp = $_POST['SEATS']['STP1'];
$cleanData_SEATS_stc = $_POST['SEATS']['STC1'];
$cleanData_SEATS_fca = $_POST['SEATS']['FCA1'];
$cleanData_SEATS_fcp = $_POST['SEATS']['FCP1'];
$cleanData_SEATS_fcc = $_POST['SEATS']['FCC1'];


function test_input($data)

{
  $data = trim($data); //trim = it will take away white space in my data   
  $data = stripslashes($data);   //stripslashes = it will take away quote
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
        #$_SESSION['CUST']["name1"]=$cleanData_CUST_name;
        #header("Location: tutorial9.php");
        $_SESSION['CUST'] = array(
          "name1" => $_POST['name1']); 
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
        #$_SESSION['CUST']["email1"]=$cleanData_CUST_email;
        #header("Location: tutorial9.php");
        $_SESSION['CUST'] = array(
          "name1" => $_POST['name1'],
          "email1" => $_POST['email1']);
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
        #$_SESSION['CUST']["mobile1"]=$cleanData_CUST_mobile;
        #header("Location: tutorial9.php");
        $_SESSION['CUST'] = array(
          "name1" => $_POST['name1'],
          "email1" => $_POST['email1'],
          "mobile1" => $_POST['mobile1']);
      }
  }
}

if (empty($_POST["card1"])) {
  $cardErr = "Credit card is required";
  $errorFound++;
} else {
  $card = test_input($_POST["card1"]);
  if (!preg_match('/^\d{14,19 }$/',$card)){
     $cardErr = "Invalid credit card format. Please type 14~19 digit only.";
     $errorFound++;
  }
  if($errorFound ==0){
    #$_SESSION['CUST']["card1"]=$cleanData_CUST_card;
    #header("Location: tutorial9.php");
    $_SESSION['CUST'] = array(
      "name1" => $_POST['name1'],
      "email1" => $_POST['email1'],
      "mobile1" => $_POST['mobile1'],
      "card1" => $_POST['card1']
    );
  }
}


if (empty($_POST["expiry1"])) {
  $expiryErr = "Expiry date is required";
  $errorFound++;
} else {
  $expiry = test_input($_POST["expiry1"]);
  if ($expiry < '2020-05-25'){
     $expiryErr = "Invalid expirydate!";
     $errorFound++;
  }
  if($errorFound ==0){
    #$_SESSION['CUST']["expiry1"]=$cleanData_CUST_expiry;
    #header("Location: tutorial9.php");
    $_SESSION['CUST'] = array(
      "name1" => $_POST['name1'],
      "email1" => $_POST['email1'],
      "mobile1" => $_POST['mobile1'],
      "card1" => $_POST['card1'],
      "expiry1" => $_POST['expiry1']
    );
}
}


$moiveID = $_POST['movie_id1'];
if ($moiveID == 'please_select_1'){
  $moiveIDErr = "Movie id required";
  $errorFound++;
} if($errorFound ==0){
  $_SESSION['MOVIE']["movie_id1"]=$cleanData_MOVIE_id;
  header("Location: tutorial9.php");
}

$moiveDay = $_POST['movie_day1'];
if ($moiveDay == 'please_select_2'){
  $moiveDAYErr = "Movie day required";
  $errorFound++;
} if($errorFound ==0){
  $_SESSION['MOVIE']["movie_day1"]=$cleanData_MOVIE_day;
  header("Location:tutorial9.php");
}

$moiveHour = $_POST['movie_hour1'];
if ($moiveHour == 'please_select_3'){
  $moiveHOURErr = "Movie hour required";
  $errorFound++;
} if($errorFound ==0){
  $_SESSION['MOVIE']["movie_hour1"]=$cleanData_MOVIE_hour;
  header("Location: tutorial9.php");
}

$seatSTA = $_POST['STA1'];
if ($seatSTA == '0' ||'1'|| '2' ||'3' ||'4' ||'5' ||'6' ||'7' ||'8' ||'9' ||'10')
  $_SESSION['SEATS']["STA1"]=$cleanData_SEATS_sta;
  header("Location: tutorial9.php");
  echo '<p>$cleanData_SEATS_sta</p>';

$seatSTA = $_POST['STP1'];
if ($seatSTA == '0' ||'1'|| '2' ||'3' ||'4' ||'5' ||'6' ||'7' ||'8' ||'9' ||'10')
  $_SESSION['SEATS']["STP1"]=$cleanData_SEATS_stp;
  header("Location: tutorial9.php");
  echo '<p>$cleanData_SEATS_stp</p>';

$seatSTA = $_POST['STC1'];
if ($seatSTA == '0' ||'1'|| '2' ||'3' ||'4' ||'5' ||'6' ||'7' ||'8' ||'9' ||'10')
  $_SESSION['SEATS']["STC1"]=$cleanData_SEATS_stc;
  header("Location: tutorial9.php");
  echo '<p>$cleanData_SEATS_stc</p>';

$seatSTA = $_POST['FCA1'];
if ($seatSTA == '0' ||'1'|| '2' ||'3' ||'4' ||'5' ||'6' ||'7' ||'8' ||'9' ||'10')
  $_SESSION['SEATS']["FCA1"]=$cleanData_SEATS_fca;
  header("Location: tutorial9.php");
  echo '<p>$cleanData_SEATS_fca</p>';

$seatSTA = $_POST['FCP1'];
if ($seatSTA == '0' ||'1'|| '2' ||'3' ||'4' ||'5' ||'6' ||'7' ||'8' ||'9' ||'10')
  $_SESSION['SEATS']["FCP1"]=$cleanData_SEATS_fcp;
  header("Location: tutorial9.php");
  echo '<p>$cleanData_SEATS_fcp</p>';

$seatSTA = $_POST['FCC1'];
if ($seatSTA == '0' ||'1'|| '2' ||'3' ||'4' ||'5' ||'6' ||'7' ||'8' ||'9' ||'10')
  $_SESSION['SEATS']["FCC1"]=$cleanData_SEATS_fcc;
  header("Location: tutorial9.php");
  echo '<p>$cleanData_SEATS_fcc</p>';








    
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

<!-- 
  # it goes to session directly without passing post!
if ($errorFound == 0 ){
$_SESSION['CUST'] = array(
  "name1" => $_POST['name1'],
  "email1" => $_POST['email1'],
  "mobile1" => $_POST['mobile1'],
  "card1" => $_POST['card1'],
  "expiry1" => $_POST['expiry1']

);

$_SESSION['MOVIE'] = array(
  "movie_id1" => $_POST['movie_id1'],
  "movie_day1" => $_POST['movie_day1'],
  "movie_hour1" => $_POST['movie_hour1'],

);

$_SESSION['SEATS'] = array(
  "STA1" => $_POST['STA1'],
  "STP1" => $_POST['STP1'],
  "STC1" => $_POST['STC1'],
  "FCA1" => $_POST['FCA1'],
  "FCP1" => $_POST['FCP1'],
  "FCC1" => $_POST['FCC1'],
);
}
-->