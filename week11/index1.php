<!-- if the admin can sucessfully 
jump into this page, they are able to modify 
my webpage
1. add img and text button
2. view all of users button
3. delete or update user button


for the sign in page, i cam just put the informations
that uses type in to session array
-->

<?php
    session_start();
    if (!isset($_SESSION['Userdata']['Username'])){
        header("location: login.php");
        # in here i need to allow them to modify, but how??
        #crud
        # in here, i can display extra button which orginary users cannot see
        # buttons will help them to modify it. 
        #$_file(this will help to upload the file)
   
    }else{
        exit;
    }
?>
Congrats <?php echo $_SESSION['Userdata']['Username'] ?>. 
You have sucessfully logged in. 
<a href="logout.php"> Click here </a> to log out. 


