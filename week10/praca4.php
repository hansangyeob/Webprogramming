<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .error{ color:red;}
    </style>
</head>
  <!--trim = it will take away white space in my data 
        stripslashes = it will take away quote
-->
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
?>

<!-- test user-input-->


<?php
session_start(); # must put!! otherwise we wont be able to access on 
# our session arrey

#this is code for input all the customer data into session arrey!!!!!!!
include 'tools_for_form.php';

# this allow us if we have any error, it wont run this code
$errorFound = 0;
#we dont know if the data is clean yet
$cleanData = $_POST["name,email"];

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialChars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])) {
       $nameErr = "Name is required";
       $errorFound++; #this is for session arrey so i need to put it in a4.php
     } else {
       $name = test_input($_POST["name"]);
       if (!preg_match("/^[a-zA-Z ]*$/", $name)){
         $nameErr = "Only letters and whitespace are allowed.";
         $errorFound++;
       }
       #this is for session arrey so i need to put it in a4.php
       if($errorFound ==0){
         $_SESSION["name"]=$cleanData;
         header("Location: tools_for_form.php");
       }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $errorFound++; #this is for session arrey so i need to put it in a4.php
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $emailErr = "Invalid email format";
         $errorFound++;#this is for session arrey so i need to put it in a4.php
      }
    }
    #this is for session arrey so i need to put it in a4.php
    if($errorFound ==0){
      $_SESSION['emil'] = $cleanData;
      header("Location: tools_for_form.php");
    }
}

# this is for .4 reset button
if (isset($_POST['session-reset'])) {
{
       unset($_SESSION["name,email"]);
  }
}
?>



<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <input type="submit" name="session-reset" value="session-reset">

</form>

<?php
echo "<h2>Your Input:</h2>";
preshow($_POST);
preshow($_SESSION);
?>
</body>
</html>