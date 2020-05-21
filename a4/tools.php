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
session_start();
if (isset($_POST['session-reset'])) {
    {unset($_SESSION);
    }
}

# This is for evaluating user input




?>

</body>
<footer>
</footer>
</html>