<!DOCTYPE html>
<html lang="en">

<?php
require "header.php";
?>

<body>
<?php include "connection.php";?>


    <!--class="nav-main-bar" -->
    <div class="top-nav-bar">
        <img src="../img/logo_dummy.png" alt="logo" class="logo"> 
        <div class="menu-bar">
            <ul>
                <li><a href="a5_admin.php">Home</a></li>
                <li><a href="upload_img_admin.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
                <li><a href="signup_admin.php">Sign up</a></li>
                <li><a href="logout.php">Log out</a></li>
                <li><a href="manage.php">Manage</a></li>
            </ul>
        </div>
    </div>

<div align="center">
<h1>Manage</h1>
<br>
<h2>
<?php if(isset($_SESSION['message'])):;?>

<div <?php echo $_SESSION['msg_type']; ?>>
   <?php
       echo $_SESSION["message"];
       unset ($_SESSION["message"]);
   ?>
</div>
<?php endif;?>

  </h2>
<form action="connection.php" method = "post">
    <div>
        <label>Name</label>
        <input type="text" name = "name" 
        value = "<?php $name; ?>" placeholder="Enter name" >
    </div>
    
    <div>
        <?php  if ($update == false): ?>
        <button type="submit" name="save">Save</button>    
        <?php else: ?>
    
        <button type="submit" name="update">Update</button>
        <?php endif ;?>
    <div>
</form>

<?php
// Create connection
session_start();
$servername = "sql104.epizy.com";
$username1 = "epiz_25803616";
$password_sql = "NJsCG4o3dKXuOwD";
$dbName = "epiz_25803616_s3821179";

$mysqli = new mysqli($servername, $username1, $password_sql, $dbName) or die(mysqli_error($mysqli)) ;
$result = $mysqli -> query("SELECT * FROM data") or die($mysqli->error);
pre_r($result);
//pre_r($result -> fetch_assoc());
?>

<div>

    <table>
    <td>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </td>
    <?php
        while ($row = $result -> fetch_assoc()):
    ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td>
 <a href="manage.php?edit=<?php echo $row['id']; ?>"> Edit</a> 
 <a href="connection.php?delete= <?php echo $row['id']; ?>"> Delete</a>
            </td>
        </tr>
    <?php endwhile;?>
    </table>
</div>

<?php
function pre_r($array){
echo "<pre>";
//print_r($array);
echo '</pre>';
}
?>
<br>
<br>
  <form action="" method="post" enctype ="multipart/form-date" >
      <input type="file" name = "userfile[]" value='' multiple=''>
      <input type="submit" name="submit" value ="Upload">
  </form>
  
</div>
</body>


</html>