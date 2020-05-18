<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include '../week8_new/tools1.php'?>
</head>

<body>
<?php
printMyCode();

?>

</body>
<footer style="position:fixed; bottom:0px;">
<?php
      preShow($_POST);     // ie echo a string
      preShow($_SESSION);
      preShow($_GET);
    ?>
    
</footer>
</html>