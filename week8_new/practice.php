<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heloo!!!</title>
</head>
<body>
    <?php
    #put your comments here
    $name = "Han sang yeob"; // student name (create valiable is to use "$")
    $year = 1;
    echo "<h1> hello world!</h1>";

    echo "<p>My name is $name. I am a year $year studnet</p>";

    echo "<br>";

    $helloworld= "hello" . "world.";
    echo "<p>$helloworld</p>";

    echo "<br>";

    $array = ['A','B','C'];
    for ($i = 0; $i<count($array); $i++){
        echo "$array[$i]";
    }

    echo "<br>";

    $array1 = ['A'=>'apple', 'B'=>'bear', 'C'=>'car'];

    foreach($array1 as $key => $value) 
        echo "<p>Element' </p>"





    ?>
</body>
</html>


<!--http://localhost/wp-s3821179.github.io/week8_new/index.php
-->
