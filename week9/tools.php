<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  
   dpm(get_defined_vars());
    ?>
</body>
</html>