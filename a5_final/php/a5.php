<!-- http://localhost/wp-s3821179.github.io/a5_final/php/a5.php -->
<!DOCTYPE html>
<html lang="en">


<?php
require "../include/header.php";
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


    <h1 style="margin-left:25rem; margin-top:5rem; margin-bottom:10rem; ">WELCOME to ANTIQUE STORE</h1>
    <h3 style="margin-left:65rem;">Stay Antique</h3>
    <h3 style="margin-left:65rem; margin-bottom:5rem;">Live Antique</h3>
    <h5 style="margin-left:65rem; margin-bottom:15rem;">Scroll down for more</h5>
    
    
    <!-- Fisrt Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <!-- slide 1 -->
            <div> <h2 class="category">LAMP</h2>   
                 
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Desk Lamp</p>
                <div class="img-box">
                    <img  class="shop-item-image" src="../img/lamp1.jpg" alt="lamp">
                </div>

                <p class="shop-item-details"> Cozy desk lamp
                    <a href="#" class="shop-item-price"> $ 19.99</a>   <!-- ????????????? -->
                </p>

                <div class="btn btn-primary shop-item-button">
                    <a  onclick=addedCart();>Add to Cart</a>
                </div>
            </div>
            </div>

            
            <div> <h2 class="category" ><a href="../php/products.php" class="clickhere"> Click here for more</a> </h2>
                <div class="slider-box">
                    <p class="shop-item-title" style="font-weight: lighter;">Sleeping Lamp</p>                    
                    <div class="img-box">
                        <img class="shop-item-image" src="../img/lamp2.jpg" alt="lamp">
                    </div>
    
                    <p class="shop-item-details"> white sleeping lamp
                        <a href="#" class="shop-item-price"> $ 19.99</a>   <!--  ???????????-->
                    </p>
    
                    <div class="btn btn-primary shop-item-button">
                        <a  onclick=addedCart();>Add to Cart</a>
                    </div>
                </div>
        
            </div>
            <!-- slide 1.2 -->
            <div> <h2 class="category" style="color: aliceblue;">. </h2> 
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Standing </p>
                <div class="img-box">
                    <img class="shop-item-image" src="../img/lamp3.jpg" alt="lamp">
                </div>

                <p class="shop-item-details"> luxury stand
                    <a href="#" class="shop-item-price"> $ 79.99</a>    <!-- ???????????  -->
                </p>
                <div class="btn btn-primary shop-item-button">
                    <a  onclick=addedCart();>Add to Cart</a>
                </div>
            </div>
       </div>
         

       
    </div><!-- end of swiper- container-->

      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">

            <!-- slide 1.3 -->
            <div> <h2 class="category" style="margin-top:5rem;">SOFA</h2>
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Black sofa</p>
                <div class="img-box">
                    <img class="shop-item-image" src="../img/sofa1.jpg" alt="sofa1">
                </div>

                <p class="shop-item-details"> Cozy sofa for 2 people
                    <a href="#" class="shop-item-price"> $ 199.99</a>    <!-- ???????????????? -->
                </p>

                <div class="btn btn-primary shop-item-button">
                    <a  onclick=addedCart();>Add to Cart</a>
                </div>
            </div>
            </div>

            
            <div> <h2 class="category" style="margin-top:5rem;"><a href="../php/products.php" class="clickhere">Click here for more</a> </h2>
                <div class="slider-box">
                    <p class="shop-item-title" style="font-weight: lighter;">Luxury </p>
                    <div class="img-box">
                        <img class="shop-item-image" src="../img/sofa2.jpg" alt="sofa2">
                    </div>
    
                    <p class="shop-item-details"> Sofa with white leather 
                        <a href="#" class="shop-item-price"> $ 299.99</a>    <!-- ??????????????????  -->
                    </p>
    
                    <div class="btn btn-primary shop-item-button">
                        <a  onclick=addedCart();>Add to Cart</a>
                    </div>
                </div>
        
            </div>
            <!-- slide 2.3 -->
            <div> <h2 class="category" style="margin-top:7.3rem;"> </h2> 
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Family sofa </p>
                <div class="img-box">
                    <img class="shop-item-image" src="../img/sofa3.jpg" alt="sofa3">
                </div>

                <p class="shop-item-details"> Cozy sofa for 8 people
                    <a href="#" class="shop-item-price"> $ 349.99</a>    <!-- ??????????????-->
                </p>
                <div class="btn btn-primary shop-item-button">
                    <a  onclick=addedCart();>Add to Cart</a>
                </div>
            </div>
       </div>
         

       
    </div><!-- end of swiper- container-->






</body>

<hr>
<?php
 require "../include/footer.php";
?>
</html>