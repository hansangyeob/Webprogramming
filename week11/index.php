<?php

 
 $_SESSION['movie_hour'] = $_POST['movie_hour1'];


?>
<hr>


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

<?php
    preShow($_POST);
    preShow($_SESSION);     // do i need to use "preShow($_SESSION);"??
    ?>