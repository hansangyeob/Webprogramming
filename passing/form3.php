<?php 
    //Initializing the session 
    session_start(); 
      
    //writing MySQL Query to insert the details 
    $insert_query = 'insert into subscriptions ( 
                    name, 
                    email_address, 
                    mobile_number, 
                    college_name, 
                    city, 
                    state, 
                    profession, 
                    course, 
                    terms_and_conditions, 
                    ) values ( 
                    ' . $_SESSION['name'] . ", 
                    " . $_SESSION['email_address'] . ", 
                    " . $_SESSION['mobile_number'] . ", 
                    " . $_POST['college_name']. ", 
                    " . $_POST['city']. ", 
                    " . $_POST['state']. ", 
                    " . $_POST['profession']. ", 
                    " . $_POST['course']. ", 
                    " . $_POST['terms_and_conditions']. "
                    );" 
  
    //let's run the query 
    mysql_query($insert_query); 
    ?> 
<pre>Successfully Registered</pre>