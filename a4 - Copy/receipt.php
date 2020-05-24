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

 <h1 style="color: royalblue; ">🌕 Cinema Moon</h1>
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

echo "<table border : 1rem;>
<tr>
<th>/Seat Type/</th>
<th>/Seat code/</th>
<th>/Reserved seats/</th>
</tr>";

echo "<tr>";
echo "<td> Standard Adult </td>";
echo "<td> STA </td>";
echo "<td>"; 
echo $_SESSION['seats']['STA'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td> Standard Concession </td>";
echo "<td> STP </td>";
echo "<td>"; 
echo $_SESSION['seats']['STP'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td> Standard Child </td>";
echo "<td> STC </td>";
echo "<td>"; 
echo $_SESSION['seats']['STC'];
echo "</td>";
echo "</tr>";



echo "<tr>";
echo "<td> First Class Adult </td>";
echo "<td> FCA </td>";
echo "<td>"; 
echo $_SESSION['seats']['FCA'];
echo "</td>";
echo "</tr>";

echo "<br>";


echo "<tr>";
echo "<td> First Class Concession </td>";
echo "<td> FCP </td>";
echo "<td>"; 
echo $_SESSION['seats']['FCP'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td> First Class Child </td>";
echo "<td> FCC </td>";
echo "<td>"; 
echo $_SESSION['seats']['FCC'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "💰Total price:";
echo "</td>";
echo "<td>";
echo number_format((15*$_SESSION['seats']['STA']+
                   5*$_SESSION['seats']['STP']+
                   7.5* $_SESSION['seats']['STC']+
                   30* $_SESSION['seats']['FCA']+
                   20* $_SESSION['seats']['FCP']+
                   15* $_SESSION['seats']['FCC'])*1.19
                   ,2);
echo "</td>";
echo "</tr>";
echo "</table>";


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
    $total = number_format(
        (15*$_SESSION['seats']['STA']+
        5*$_SESSION['seats']['STP']+
        7.5* $_SESSION['seats']['STC']+
        30* $_SESSION['seats']['FCA']+
        20* $_SESSION['seats']['FCP']+
        15* $_SESSION['seats']['FCC']) * 1.19
    ,2); // calculate the total serverside and format it to 2 decimal places
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
