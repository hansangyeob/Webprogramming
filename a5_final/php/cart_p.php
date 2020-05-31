<?php
session_start();

// Create connection
$servername = "sql104.epizy.com"; 
$username1 = "epiz_25803616";
$password_sql = "NJsCG4o3dKXuOwD";
$dbName = "epiz_25803616_s3821179";


$connection = mysqli_connection($servername, $username1, $password_sql, $dbName);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
</head>

<body>
    <br>
    <div style ="width:700px;">
    <h3>Shopping Cart</h3><br>
    <?php 
    $query = "SELECT * FROM tbl_products ORDER BY category ASC";
    $result = mysqli_query($connection,$query);
   
    if(mysqli_num_rows($result) >0)
    {
        while ($row = mysqli_fetch_array($result))
        {
    ?> 
    
    <div>
        <form method="post" action="upload_img.php?action=add&id=<?php echo $row["category"]; ?>">
            <div>
                <img src="../img/lamp1.jpg" alt="lamp1">
                <h4> <?php echo $row["name"]; ?></h4>
                <h4>$ <?php echo $row["price"]; ?></h4>
                <h5> <?php echo $row['details']; ?> </h5>
                <input type="text" name = "quantity" value="1">
                <input type="hidden" name="hidden_name" value="<?php $row["name"]; ?>">
                <input type="hidden" name="hidden_price" value="<?php $row["price"]; ?>">
                <input type="submit" name="add_to_cart" value="add to cart">
            </div> 
        
        </form>
    </div>  
<?php    
}

    }


    ?>
    </div>
    <br>
</body>
</html>