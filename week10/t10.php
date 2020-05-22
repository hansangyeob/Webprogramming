<!-- http://localhost/wp-s3821179.github.io/a4/index-fallback.php -->

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>A4 Backup Page</title>
    <style>
    label { display: inline-block; width:90px; }
    .error { color: red; font-style : italic;} 
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
        
        <label>Movie Id:</label>
        <select name="movie[id]" id="movie[id]">
            <option value="please_select_1">Please select</option>  
            <option value="ACT">ACT</option>
            <option value="ANM">ANM</option>
            <option value="ROM">ROM</option>
        </select>
        <span class="error">* <?php echo $moiveIDErr;?></span>                  
  
        <br>
        
        <label>Movie Day:</label>
        <select name="movie[day]" id="movie[day]">
            <option value="please_select_2">Please select</option>
            <option value="MON">MON</option>
            <option value="TUE">TUE</option>
            <option value="WED">WED</option>
            <option value="TUR">TUR</option>
            <option value="FRI">FRI</option>
            <option value="SAT">SAT</option>
            <option value="SUN">SUN</option>
        </select>
        <span class="error">* <?php echo $moiveDAYErr;?></span>                  
                    
        <br>

        <label>Movie Hour:</label>
        <select name="movie[hour]" id="movie[hour]">
           <option value="please_select_3">Please select</option>
           <option value="T12">T12</option>
           <option value="T15">T15</option>
           <option value="T18">T18</option>
           <option value="T21">T21</option>
        </select>
        <span class="error">* <?php echo $moiveHOURErr;?></span>                  
          
        
        <br><br>
        
        <label>Seats STA:</label>
        <select name="seats[STP]" id="STA">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        
        <br>
        
        <label>Seats STP:</label>
        <select name="seats[STP]" id="STA">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>        
        
        <br>
        
        <label>Seats STC:</label>
        <select name="seats[STC]" id="STA">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>      
        
        <br>
        
        <label>Seats FCA:</label>
        <select name="seats[FCA]" id="FCA">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>      
        
        <br>
        
        <label>Seats FCP:</label>
        <select name="seats[FCP]" id="FCP">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>   

        <br>
        
        <label>Seats FCC:</label>
        <select name="seats[FCC]" id="FCC">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>      
        
        <br><br>
        
        <label>Cust Name:</label>
        <input type="text" id="name" name="cust[name]">
        <span class="error">* <?php echo $nameErr;?></span>

        <br>

        <label>Cust Email:</label>
        <input type=text name='cust[email]'/>
        <span class="error">* <?php echo $emailErr;?></span>
        
        <br>

        <label>Cust Mobile:</label>
        <input type=text name='cust[mobile]'/>
        <span class="error">* <?php echo $mobileErr;?></span>

        <br>

        <label>Cust Card:</label>
        <input type=text name='cust[card]'/>
        <span class="error">* <?php echo $cardErr;?></span>
        <br>
        
        <label>Cust Expiry:</label>
        <input type=date name='cust[expiry]'/>
        <span class="error">* <?php echo $expiryErr;?></span>

       
        <br><br>
       
        <input type=submit id ="submit_booking" value='Book now!'>
       
        <br><br>
       
        <input type="submit" name="session-reset" value="session-reset">
      
      </form>
    </main>
<hr>
    <footer>
    <?php
    echo "<h5 style='color:red;'>Thie is for POST area</h5>";
    preShow($_POST);
    echo "<h5 style='color:red;'>Thie is for SESSION area</h5>";
    preShow($_SESSION);
    echo "<h5  style='color:red;'>Thie is for debugging area</h5>";
    printMycode();
    ?>

    </footer>
    
  </body>
</html>
