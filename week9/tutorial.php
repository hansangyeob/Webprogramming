<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- this is to include your php file to this web--> 
 <?php include 'tools.php'?>
 <style>
        .error{ color:red;}
    </style>
</head>
<body>
<h1>feedback</h1>
    <div>Please give your comment</div>
    <form action="processing.php" method="post">
        <label for="">Your name </label>
        <input type="text" name="name" id="name" \>
        <br>
        <label for="">Your email </label>
        <input type="text" name="email" id="email" \>
        <br>
        <input type="submit" name ="submit" value="submit">
    </form>    
 <br><br>
 <!--  this is for jsp to php-->
    <?php
     php2js($priceObject, 'pricesArrayJS');   // ie echos javascript equivalent code
    ?>
<script>
    for (key in pricesArrayJS)
    {
        value = pricesArrayJS[key];
        document.write (key + '<br>');
        for (key1 in value)
        {
            value1 = value[key1];
            document.write(key1+":"+value1+'<br>');
        }
    }
</script>

<!-- this is for user-input-->
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

<footer style= "bottom:0px;">
    <h3> This area is footer for debugging</h3>
    <?php
    preShow($_POST);     // do i need to use "preShow($_SESSION);"??
    ?>
<?php
 printMyCode(); 
?>


</footer>

</html>