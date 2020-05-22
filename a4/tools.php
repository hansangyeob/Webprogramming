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
function printMyCode() {
 $lines = file($_SERVER['SCRIPT_FILENAME']);
 echo "<pre class='mycode'><ol>";
 foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
 echo '</ol></pre>';
}


# This is for resetting the session
if (isset($_POST['session-reset'])) {
    unset($_SESSION['cust'],
          $_SESSION['movie'],
          $_SESSION['seats']);
    }


# This is for evaluating user input


$errorFound = 0;

function test_input($data)

{
  $data = trim($data); 
  $data = stripslashes($data);
  $data = htmlspecialChars($data);
  return $data;
}

$cleanData_CUST_name = $_POST['cust']['name'];
$cleanData_CUST_email = $_POST['cust']['email'];
$cleanData_CUST_mobile = $_POST['cust']["mobile"];
$cleanData_CUST_card = $_POST['cust']["card"];
$cleanData_CUST_expiry = $_POST['cust']["expiry"];

$cleanData_SEATS_sta = $_POST['seats']['STA'];
$cleanData_SEATS_stp = $_POST['seats']['STP'];
$cleanData_SEATS_stc = $_POST['seats']['STC'];
$cleanData_SEATS_fca = $_POST['seats']['FCA'];
$cleanData_SEATS_fcp = $_POST['seats']['FCP'];
$cleanData_SEATS_fcc = $_POST['seats']['FCC'];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if (empty($_POST['cust']['name'])) {
        $nameErr = "Name is required";
        $errorFound++;
    } else{
            $name = test_input($_POST['cust']['name']);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)){
                $nameErr = "Only letters and whitespace are allowed.";
                $errorFound++;
               }if($errorFound ==0){
                    $_SESSION['cust']['name'] =  $cleanData_CUST_name; 
                    #header("Location: rep.php");
       }
    }


    if (empty($_POST['cust']['email'])) {
        $emailErr = "Email is required";
        $errorFound++;
      } else {
            $email = test_input($_POST['cust']['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
               $emailErr = "Invalid email format";
               $errorFound++;
              }if($errorFound ==0){
                  $_SESSION['cust']["email"]=$cleanData_CUST_email;
                  #header("Location: rep.php");
        }
        }   
    
    

   if (empty($_POST['cust']['mobile'])) {
        $mobileErr = "Mobile is required";
        $errorFound++;
      } else {
            $mobile = test_input($_POST['cust']['mobile']);
            if (!preg_match('/^\d{10}$/',$mobile)){
                $mobileErr = "Invalid moblie format. Please type 10 digit only.";
                $errorFound++;
               }if($errorFound ==0){
                    $_SESSION['cust']["mobile"]=$cleanData_CUST_mobile;
                    #header("Location: rep.php");
      
    }

    if (empty($_POST['cust']['card'])) {
        $cardErr = "Credit card is required";
        $errorFound++;
      } else {
            $card = test_input($_POST['cust']['card']);
            if (!preg_match('/^\d{14,19 }$/',$card)){
               $cardErr = "Invalid credit card format. Please type 14~19 digit only.";
               $errorFound++;
        }if($errorFound ==0){
          $_SESSION['cust']["card"]=$cleanData_CUST_card;
          #header("Location: rep.php"); 
        }
      }
    }

    if (empty($_POST['cust']['expiry'])) {
        $expiryErr = "Expiry date is required";
        $errorFound++;
      } else {
        $expiry = test_input($_POST['cust']['expiry']);
        if ($expiry < '2020-05-25'){
           $expiryErr = "Invalid expirydate!";
           $errorFound++;
        }
        if($errorFound ==0){
          $_SESSION['cust']["expiry"]=$cleanData_CUST_expiry;
          #header("Location: rep.php");
      }
      }
    
      if (empty($_POST['cust']['card'])) {
        $cardErr = "Credit card is required";
        $errorFound++;
      } else {
        $card = test_input($_POST['cust']['card']);
        if (!preg_match('/^\d{14,19 }$/',$card)){
           $cardErr = "Invalid credit card format. Please type 14~19 digit only.";
           $errorFound++;
        }if($errorFound ==0){
          $_SESSION['cust']["card"]=$cleanData_CUST_card;
          #header("Location: rep.php");
        }
      }



           $option =$_POST['movie']['movie_id'];
           $selectNeeded = $option[0];
        if ($option == $selectNeeded){
            $moiveIDErr = "Movie id required";
            $errorFound++;
         }if($errorFound ==0){
              $_SESSION['movie']["movie_id"]=$option;
              #header("Location: rep.php");
              }

              $option2 =$_POST['movie']['movie_day'];
              $selectNeeded2 = $option2[0];
           if ($option == $selectNeeded2){
               $moiveDAYErr = "Movie day required";
               $errorFound++;
             }if($errorFound ==0){
                $_SESSION['movie']["movie_day"]=$option2;
                #header("Location:rep.php");
                }

      
              $option3 =$_POST['movie']['movie_hour'];
              $selectNeeded3 = $option3[0];
            if ($option3 == $selectNeeded3){
                $moiveHOURErr = "Movie hour required";
                $errorFound++;
              }if($errorFound ==0){
                  $_SESSION['movie']["movie_hour"]=$option3;
                  #header("Location: rep.php");
                  }



}#this is end of "if statment" for cust input
?>

</body>
<footer>
</footer>
</html>