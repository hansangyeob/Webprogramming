
<!DOCTYPE html>
<html lang="en">

<?php
require "include/header.php";
?>

<body>

    <!--class="nav-main-bar" -->
    <div class="top-nav-bar">
        <img src="../img/logo_dummy.png" alt="logo" class="logo"> 
        <div class="menu-bar">
        <ul>
                <li><a href="../php/user/a5.php">Home</a></li>
                <li><a href="../php/user/products.php">Antique</a></li>
                <li><a href="../php/user/cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
                <li><a href="../php/user/login.php">Log in</a></li>
            </ul>
        </div>
    </div>

<form action="process.php" method="post" name="Login_Form">
    <table>
      <tr>
        <td><h3>Login</h3></td>
      </tr>
      <tr>
          <td>. </td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input name="username_login" type="text" placeholder="Enter Your User Name"></td>
        <td> <?php echo $err;?></td>
      </tr>
      <tr>
        <td>Password</td>  
        <td><input name="password_login" type="password" class="Input" placeholder="Enter Your Password"></td>
        <td><?php echo $err;?></td>
      </tr>
      <tr>
        
        <td><input name="login-submit" type="submit" value="LOGIN" class="btn-login" ></td>

      </tr>
    </table>
<form action="a5.php" name = "logged-out" method = "post">
<button> Log out</button>
 </form>
    <br><br>
        <input type="submit" name="session-reset" value="session-reset">

  
    
  </form>

</body>

<hr>

<footer>

<?php
require "include/footer.php";
?>


</html>



<!--
        $_SESSION['username'] = $uname;
        $_SESSION['password'] = $password;


    #This is for log in page
$login = array('admin1' => '1234', 
               'admin2' => '12345',
               'Tony' => '123456');


            if (isset($_POST['Login'])) {
                
#if i want to put new admins who signed up, i can put it in this line
               $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
               $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    if (isset($login[$Username]) &&  $login[$Username] == $Password) {
        $_SESSION['Userdata']['Username'] = $Username;
        header("location: ../signin.html");
        exit;
    }
    else {
        $Msg = "<span style='color: red'> Invalid Login Details </span>";
        echo $Msg;
    }
}

-->


<!--
    #This is for log in page
$login = array('admin1' => '1234', 
               'admin2' => '12345',
               'Tony' => '123456');
               $Username = $_POST['Username'];
               $Password = $_POST['Password'];

               $errorFound = 0;

if (isset($_POST['Login_button'])) {
    #if i want to put new admins who signed up, i can put it in this line
   
    if(empty($_POST['userdate']['name'])){
       $usernameErr = "Username required!";
       $errorFound ++;
   }else{
       $username =test_input($_POST['userdate']['name']);
   }if(!filter("/^[a-zA-Z ]*$/",$username)){
          $usernameErr = "Username have to be in form of letters and white space only";
          $errorFound++;
       }if($errorFound ==0){
           $_SESSION["userdate"]["name"] = $_POST['userdate']['name'];
           echo "Nice job!";
   }      

   if(empty($_POST['userdate']['password'])){
    $passwordErr = "Password required!";
    $errorFound ++;
   }if($errorFound ==0){
        $_SESSION["userdate"]["password"] = $_POST['userdate']['password'];
        echo "Nice job!";
    }      
    
   }#end of $_post['Login_button']
-->