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
    session_destroy();
    header("Location:t10.php");
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
                    header("Location: ../a4/receipt.php");
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
                  header("Location: ../a4/receipt.php");
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
                    header("Location: ../a4/receipt.php");
      
    }

    if (empty($_POST['cust']['card'])) {
        $cardErr = "Credit card is required";
        $errorFound++;
      } else {
            $card = test_input($_POST['cust']['card']);
            if (!preg_match('/^\d{14,19}$/',$card)){
               $cardErr = "Invalid credit card format. Please type 14~19 digit only.";
               $errorFound++;
        }if($errorFound ==0){
          $_SESSION['cust']["card"]=$cleanData_CUST_card;
          header("Location: ../a4/receipt.php"); 
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
          header("Location: ../a4/receipt.php");
      }
    }
           


 $_SESSION['movie']['movie_id']=$_POST['movie']['id'];   
 $_SESSION['movie']['movie_day']=$_POST['movie']['day'];
 $_SESSION['movie']['movie_hour']=$_POST['movie']['hour'];


 $_SESSION['seats']['STA']=$_POST['seats']['STA']; 
 $_SESSION['seats']['STP']=$_POST['seats']['STP'];
 $_SESSION['seats']['STC']=$_POST['seats']['STC'];
 $_SESSION['seats']['FCA']=$_POST['seats']['FCA'];
 $_SESSION['seats']['FCP']=$_POST['seats']['FCP'];
 $_SESSION['seats']['FCC']=$_POST['seats']['FCC'];    
 
 if(($_POST['seats']['STA'] ==0) && 
    ($_POST['seats']['STP'] ==0) &&
    ($_POST['seats']['STC'] ==0) &&
    ($_POST['seats']['FCA'] ==0) &&
    ($_POST['seats']['FCP'] ==0) &&
    ($_POST['seats']['FCC'] ==0)){
       echo $seatErr = '❌Please choose seat!❌';}

       $_PRICES = array(
        "STA" => 15,
        "STP" => 5,
        "STC" => 7.5,
        "FCA" => 30,
        "FCP" => 20,
        "FCC" => 15
        );
    
        $totalqty = $_SESSION['seats']['STA'] +
        $_SESSION['seats']['STP'] +
        $_SESSION['seats']['STC'] +
        $_SESSION['seats']['FCA'] +
        $_SESSION['seats']['FCP'] +
        $_SESSION['seats']['FCC'] ;

        
    $total_price = 0.0;
    

    
    $tax = 0.1;
    
    $total_price *= 1+$tax;
    
    number_format($total_price,2);
    number_format($totalqty,2);
    number_format($_SESSION["seats"]["STA"],2);



}#this is end of "if statment" for cust input






?>

</body>


</html>

<!--

$sta = 15;
$stp = 5;
$stc = 7.5;
$fca = 30;
$fcp = 20;
$fcc = 15;
$totalamount = "0.0";


$totalamount =  $_SESSION['seats']['STA'] * $sta +
                $_SESSION['seats']['STP'] * $stp +
                $_SESSION['seats']['STC'] * $stc +
                $_SESSION['seats']['FCA'] * $fca +
                $_SESSION['seats']['FCP'] * $fcp +
                $_SESSION['seats']['FCC'] * $fcc;

$tax = 0.1;

$totalprice = $totalamount * (1+$tax);                

echo array_sum($totalamount);
echo array_sum($totalprice);
number_format($totalprice,2);

echo number_format($totalprice,2);

-->

<!--
not working 'movie'

 $cleanData_movie_id = $_POST['movie']['movie_id'];      
 $cleanData_movie_day = $_POST['movie']['movie_day'];
 $cleanData_movie_hour = $_POST['movie']['movie_hour']; 

  if ($cleanData_movie_id == $selectNeeded){
                $moiveIDErr = "Movie id required";
                }else{
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
-->


<!--
total cost not working

    define("sta1",15);
define("stp1",5);
define("stc1",7.5);
define("fca1",30);
define("fcp1",20);
define("fcc1",15);



    $totalqty = $_SESSION['seats']['STA'] +
                $_SESSION['seats']['STP'] +
                $_SESSION['seats']['STC'] +
                $_SESSION['seats']['FCA'] +
                $_SESSION['seats']['FCP'] +
                $_SESSION['seats']['FCC'] ;
 
$totalamount = "0.0";

$totalamount =  $_SESSION['seats']['STA']  * sta1 +
                $_SESSION['seats']['STP'] * stp1 +
                $_SESSION['seats']['STC'] * stc1 +
                $_SESSION['seats']['FCA'] * fca1 +
                $_SESSION['seats']['FCP'] * fcp1 +
                $_SESSION['seats']['FCC'] * fcc1;

$tax = 0.1;

$totalprice = $totalamount * (1+$tax);                

number_format($totalprice,2);


                -->