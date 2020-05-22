<html>
<head>
</head>
<body>
<?php 

   session_start(); 
   function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
         return $ret;
   else 
        echo $ret; 
}

# This is to show my lines of code for debugging
session_start();
function printMyCode() {
 $lines = file($_SERVER['SCRIPT_FILENAME']);
 echo "<pre class='mycode'><ol>";
 foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
 echo '</ol></pre>';
}


# This is for resetting the session
if (isset($_POST['session-reset'])) {
    unset($_SESSION['CUST'],$_SESSION['MOVIE'],$_SESSION['SEATS']);
    }


# This is for evaluating user input

session_start();
$errorFound = 0;

function test_input($data)

{
  $data = trim($data); 
  $data = stripslashes($data);
  $data = htmlspecialChars($data);
  return $data;
}

$cleanData_CUST_name = $_POST['cust']['cust[name]'];


if (isset($_POST['submit_booking'])){
    if (empty($_POST["cust[name]"])) {
        $nameErr = "Name is required";
        $errorFound++;
      } else {
            $name = test_input($_POST["cust[name]"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)){
                $nameErr = "Only letters and whitespace are allowed.";
                $errorFound++;
       }if($errorFound ==0){
        $_SESSION['CUST'] =  $_POST['cust[name]']; 
       }
}


}#this is end of "if statment" for cust input
?>

</body>
<footer>
</footer>
</html>