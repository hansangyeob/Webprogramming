
<html>
<body>
        
    
<?php
session_start();
#include 'tools9.php';

#  if('STA1' == 0) && 
#    ('STP1' == 0) && 
#    ('STC1' == 0) && 
#    ('FCA1' == 0) && 
#    ('FCP1' == 0) && 
#    ('FCC1' == 0) ) {
#    echo "please choose seat";
#} else {
#    header("Location: receipt9.php");
#}

echo '<h2>hello!! welcome to receipt page</h2>';

#if ( empty( $_SESSION['CUST'] || $_SESSION['MOVIE'] || $_SESSION['SEATS'] ){
#    header('Location: tutorial9.php');
#}

?>


</body>
</html>