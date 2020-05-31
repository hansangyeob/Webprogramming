<!DOCTYPE html>
<html lang="en">

<?php
require "header.php";
?>

<body>

    <!--class="nav-main-bar" -->
    <div class="top-nav-bar">
        <img src="../img/logo_dummy.png" alt="logo" class="logo"> 
        <div class="menu-bar">
        <ul>
                <li><a href="../a5.php">Home</a></li>
                <li><a href="../products.php">Antique</a></li>
                <li><a href="../cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
                <li><a href="../login.php">Log in</a></li>
            </ul>
        </div>
    </div>


<!-- cart -->
<h1> This is shopping cart</h1>
<div>
    <!--product 1 -->
    <form action="cart.php" method = "post">
        <div>
            <img src="../img/lamp1.jpg" alt="lamp1">
        </div>
        <div>
            <h5>Product1</h5>
        </div>
        <div>
            <p>
                some quick example text to build on the cart.
            </p>
            <h5>
                <small><s>$999</s></small>
                $599.9
            </h5>
            <button type="submit" name="add"> Add to cart</button>
        </div>
    </form>

    <!--product 2 -->
    <form action="cart.php" method = "post">
        <div>
            <img src="../img/lamp1.jpg" alt="lamp1">
        </div>
        <div>
            <h5>Product1</h5>
        </div>
        <div>
            <p>
                some quick example text to build on the cart.
            </p>
            <h5>
                <small><s>$999</s></small>
                $599.9
            </h5>
            <button type="submit" name="add"> Add to cart</button>
        </div>
    </form>

    <!--product 3 -->

    <form action="cart.php" method = "post">
        <div>
            <img src="../img/lamp1.jpg" alt="lamp1">
        </div>
        <div>
            <h5>Product1</h5>
        </div>
        <div>
            <p>
                some quick example text to build on the cart.
            </p>
            <h5>
                <small><s>$999</s></small>
                $599.9
            </h5>
            <button type="submit" name="add"> Add to cart</button>
        </div>
    </form>
</div>


</body>

<hr>
<?php
require "footer.php";
?>
</footer>
</html>