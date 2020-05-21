<!-- http://localhost/wp-s3821179.github.io/a4/index-fallback.php -->

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>A4 Backup Page</title>
    <style>
    label { display: inline-block; width:90px; }
    .error { color: red;} 
    </style>

<?php include "../a4/tools.php" ?>
  </head>

  <body>
    
    <header>
      <h1 style="color: royalblue;">🌕 Cinema Moon</h1>
    </header>

    <nav>
    </nav>

    <main>
      <h2> Booking Form</h2>
      <form method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
        
        <label>MovieId</label>
        <input type=text name='movie[id]'/>
        
        <br>
        
        <label>MovieDay</label>
        <input type=text name='movie[day]'/>
        
        <br>

        <label>MovieHour</label>
        <input type=text name='movie[hour]'/>
        
        <br><br>
        
        <label>SeatsSTA</label>
        <input type=text name='seats[STA]'/>
        
        <br>
        
        <label>SeatsSTP</label>
        <input type=text name='seats[STP]'/>
        
        <br>
        
        <label>SeatsSTC</label>
        <input type=text name='seats[STC]'/>
        
        <br>
        
        <label>SeatsFCA</label>
        <input type=text name='seats[FCA]'/>
        
        <br>
        
        <label>SeatsFCP</label>
        <input type=text name='seats[FCP]'/>
        
        <br>
        
        <label>SeatsFCC</label>
        <input type=text name='seats[FCC]'/>
        
        <br><br>
        
        <label>CustName</label>
        <input type="text" id="name" name="cust[name]">
        <span class="error">* <?php echo $nameErr;?></span>

        <br>

        <label>CustEmail</label>
        <input type=text name='cust[email]'/>
        
        <br>

        <label>CustMobile</label>
        <input type=text name='cust[mobile]'/>
        
        <br>

        <label>CustCard</label>
        <input type=text name='cust[card]'/>
        
        <br>
        
        <label>CustExpiry</label>
        <input type=text name='cust[expiry]'/>
      
       
        <br><br>
       
        <input type=submit value='Book now!'>
       
        <br><br>
       
        <input type="submit" name="session-reset" value="session-reset">
      
      </form>
    </main>
<hr>
    <footer>
    <?php
    echo "<h5 style='color:red;'>Thie is for POST area</h5>";
    preShow($_POST);
    echo "<h5  style='color:red;'>Thie is for debugging area</h5>";
    printMycode();
    ?>

    </footer>
    
  </body>
</html>
