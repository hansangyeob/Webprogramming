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
  
<?php
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
     } else {
       $name = test_input($_POST["name"]);
       if (!preg_match("/^[a-zA-Z ]*$/", $name)){
         $nameErr = "Only letters and whitespace are allowed.";
       }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $emailErr = "Invalid email format";
      }
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
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
?>
</body>
</html>