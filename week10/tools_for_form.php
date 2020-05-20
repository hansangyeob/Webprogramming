<?php
    echo '<h2>This is page for tools</h2>';
    preShow($_SESSION);
    #this will move to the first page for
    #customers who have dummy data
    if(empty($_SESSION["name,email"])){
        header("Location: form.php");
    }
    #after all the process we can open file 
    $myfile = fopen("booking.txt","w");
    # w wil erase the provious data
    fputcsv($myfile,$_SESSION);
    fclose($myfile);

?>


<!--
    #this will create cells

    $myfile = fopen("booking.txt","w");
    $now = date('d/m h:i');
    $total = // calculate the total serverside and format it to 2 decimal places
    $cells = array_merge(
   [$now],   
    $_SESSION['cust'],  
    $_SESSION['movie'],  
    $_SESSION['seats'],  
    (array) $total );
    fputcsv($myfile,$cells);
    fclose($myfile);

-->