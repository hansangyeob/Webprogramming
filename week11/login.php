<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action="" method="post" name="Login_Form">
        <table>
          <tr>
            <td><h3>Login</h3></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input name="Username" type="text" class="Input"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name="Password" type="password" class="Input"></td>
          </tr>
          <tr>
            <td> </td>
            <td><input name="Submit" type="submit" value="Login" class="Button"></td>
          </tr>
        </table>
      </form>
</body>
</html>

<?php
session_start();
$login = array('admin1' => 'test1', 'admin2' => 'test2', 'Minh' => '123456');
if (isset($_POST['Submit'])) {

$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    if (isset($login[$Username]) &&  $login[$Username] == $Password) {
        $_SESSION['Userdata']['Username'] = $Username;
        header("location: index1.php");
        exit;
    }
    else {
        $Msg = "<span style='color: red'> Invalid Login Details </span>";
        echo $Msg;
    }
}
?>