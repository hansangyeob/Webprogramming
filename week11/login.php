<!DOCTYPE html>
<html>
<head>
  <p>this is header</p>
</head>

<body>
  <p>this is body</p>

    <form action="" method="post" name="Login_Form">
        <table>
          <tr>
            <td><h3>Login</h3></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input name="Username" type="text" class="Input" <?php echo $Msg;?>></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name="Password" type="password" class="Input" <?php echo $Msg; ?>></td>
          </tr>
          <tr>
            <td> </td>
            <td><input name="Login_button" type="submit" value="Login" class="Button" method="post"></td>
          </tr>
        </table>
      </form>

</body>
<hr>

<footer>
  <p>This is footer area</p>

  <?php
session_start();
function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
         return $ret;
   else 
        echo $ret; 
}

   
#This is for log in page
$login = array('admin1' => '1234', 
               'admin2' => '12345', 
               'Tony' => '123456');

               if (isset($_POST['Login_button'])) {
                #if i want to put new admins who signed up, i can put it in this line
                  $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                  $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                  
                     if (isset($login[$Username]) ==$_POST['Usernme'] &&  
                         isset($login[$Password]) == $_POST['Password']){
                        $_SESSION['Userdata']['Username'] = $_POST['Userdata']['Username'];
                        $_SESSION['Userdata']['Password'] = $_POST['Userdata']['Password'];
                        }else {
                           $Msg = "<span style='color: red'> Invalid Login Details </span>";
                          }
                          }

    echo "<h5 style='color:red;'>Thie is for POST area</h5>";
    preShow($_POST);
    echo "<h5 style='color:red;'>Thie is for SESSION area</h5>";
    preShow($_SESSION); 
    ?>

<!-- for the 1.5 i can display all the array of user id and create buttons to 
      delete them. 
      1. click the delete button
      2. how the users in current session(printr)
      3. next that, i can crate another button"delete"
-->
</footer>
</html>