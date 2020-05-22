<html>
    <body>
    <?php 
  
  // Initialize the session 
  session_start(); 
         
  // Store the submitted data sent 
  // via POST method, stored  
    
  // Temporarily in $_POST structure. 
  $_SESSION['name'] = $_POST['user_name']; 
    
  $_SESSION['email_address'] = $_POST['user_email_address']; 
    
  $_SESSION['mobile_number'] = $_POST['user_mobile_number']; 
             
  ?> 
    
  <!-- Form for other details--> 
  <form method="POST" action="form3.php"> 
         
      <pre> 
          Company/College:  
          <input type="text" name="college_name"> 
      </pre> 
        
      <pre> 
          City:  
          <input type="text" name="city"> 
      </pre> 
        
      <pre> 
          State:  
          <input type="text" name="state"> 
      </pre> 
             
      <pre> 
          You're a:  
          <input type="radio" name="profession"
                  value="Student">Student 
            
          <input type="radio" name="profession"
                  value="Working Professional"> 
                  Working Professional 
      </pre> 
         
      <pre> 
          Course:  
          <select name="course"> 
              <option value="DSnA"> 
                  Data Structures and Algorithms 
              </option> 
                
              <option value="Gate_test"> 
                  GATE Mock Test 
              </option> 
                
              <option value="Mock_interview"> 
                  Mock Interviews 
              </option> 
                
              <option value="Machine_learning"> 
                  Machine Learning 
              </option> 
          </select> 
      </pre> 
      <br> 
             
      <pre> 
          <input type="checkbox" 
              name="terms_and_conditions">  
              Terms and Conditions  
      </pre> 
      <br> 
        
      <input type="submit" value="Register"> 
     
  </form> 
    </body>
</html>