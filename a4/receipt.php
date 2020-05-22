<html>

<head>
  <?php      
  session_start();
  
      echo' <img class = "letterhead" src="../a4/dummy_letterhead.jpg" width="200" height="100"  alt="Logo of a company" />';
      echo'<br><br><br><br><br><br>';   
      echo'<h4 style = "color:gray; float:right; left:10%;">00 123 456 789</h4> ';
      
       if(empty($_SESSION['cust'])){
            header("Location:../week10/t10.php");
       }
       
       if(empty($_SESSION['movie'])){
        header("Location:../week10/t10.php");
       }   
       
       if (empty($_SESSION['seats'])){
        header("Location:../week10/t10.php");
       } 
  
  ?>
 <style>
     .letterhead { position : absolute; left: 65rem; border-radius: 50%;};
 </style>
 <h1 style="color: royalblue;">🌕 Cinema Moon</h1>
 <h4>Thank you for using our service. </h4>
 <h4>We will try our best to present you wanderful time with us.</h4>
 <h4>Hope to see you soon! </h4>
</head>
<br><br>
<body>
<?php



echo '<h3>👌 Movie detail </h3>';
echo "- Movie ID: " . $_SESSION['movie']['movie_id'];
echo'<br><br>';
echo "- Movie day: " . $_SESSION['movie']['movie_day'];
echo'<br><br>';
echo "- Movie hour: " . $_SESSION['movie']['movie_hour'];

echo '<h3>👌 Seats</h3>';
echo "- Seats for STA: " . $_SESSION['seats']['STA'];
echo'<br><br>';
echo "- Seats for STP: " . $_SESSION['seats']['STP'];
echo'<br><br>';
echo "- Seats for STC: " . $_SESSION['seats']['STC'];
echo'<br><br>';
echo "- Seats for FCA: " . $_SESSION['seats']['FCA'];
echo'<br><br>';
echo "- Seats for FCP: " . $_SESSION['seats']['FCP'];
echo'<br><br>';
echo "- Seats for FCC: " . $_SESSION['seats']['FCC'];
echo'<br><br>';


echo '<h3>👌 Personal information </h3>';
echo "- Name: " . $_SESSION['cust']['name'];
echo'<br><br>';
echo "- Email: " . $_SESSION['cust']['email'];
echo'<br><br>';
echo "- Mobile: " . $_SESSION['cust']['mobile'];
echo'<br><br>';
echo "- Credit card: " . $_SESSION['cust']['card'];
echo'<br><br>';
echo "- Expiry: " . $_SESSION['cust']['expiry'];

$myfile = fopen("bookings.txt","a"); #  w(it will delete previous data) or a(it will add up)
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


?>

</body>
</html>

<!--

    #after all the process we can open file 
    $myfile = fopen("booking.txt","a");
    # w wil erase the provious data
    fputcsv($myfile,$_SESSION);
    fclose($myfile);
    #this will create cells

    $myfile = fopen("booking.txt","w");   w(it will delete previous data) or a(it will add up)
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
