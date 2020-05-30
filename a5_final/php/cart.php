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


<!-- cart -->
    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
            <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-item-image" src="" width="100" height="100">
                    <span class="cart-item-title">T-Shirt</span>
                </div>
                <span class="cart-price cart-column">$19.99</span>
                <div class="cart-quantity cart-column">
                    <input class="cart-quantity-input" type="number" value="1">
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
            <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-item-image" src="" width="100" height="100">
                    <span class="cart-item-title">Album 3</span>
                </div>
                <span class="cart-price cart-column">$9.99</span>
                <div class="cart-quantity cart-column">
                    <input class="cart-quantity-input" type="number" value="2">
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$39.97</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
    </section>


</body>

<hr>
<?php
require "include/footer.php";
?>
</footer>
</html>