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


<h1 style="margin-left:5rem; margin-top:3rem;">Products</h1>

<br><br>
    <!-- Fisrt catagory -->
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <!-- lamp_first_row -->
            <!-- 1.lamp1-->
            <div>  
                 
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Antique Lamp</p>
                <div class="img-box">
                    <img  class="shop-item-image" src="../img/lamp4.jpg" alt="lamp">
                </div>

                <p class="shop-item-details"> Antique Lamp for you
                    <a href="#" class="shop-item-price"> $ 49.99</a>   <!-- ????????????? -->
                </p>

                <div class="btn btn-primary shop-item-button">
                    <a  onclick=addedCart();>Add to Cart</a>
                </div>
            </div>
            </div>
            
            <div>  
                 <!-- 1.lamp2-->
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

            <!-- 1.lamp3 -->
            <div> 
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
            <!-- 1.lamp4 -->
            <div> 
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
         

       
    </div><!-- end of first swiper- container-->

    <!-- secend catagory -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <div>  
                 <!-- 2.lamp1-->
                 <div class="slider-box">
                     <p class="shop-item-title" style="font-weight: lighter;">Table Lamp</p>
                     <div class="img-box">
                         <img  class="shop-item-image" src="../img/lamp8.jpg" alt="lamp">
                     </div>
     
                     <p class="shop-item-details"> Rattan Table Lamp
                         <a href="#" class="shop-item-price"> $ 99.99</a>   <!-- ????????????? -->
                     </p>
     
                     <div class="btn btn-primary shop-item-button">
                         <a  onclick=addedCart();>Add to Cart</a>
                     </div>
                 </div>
                 </div>
         
            <!-- 2.lamp 2-->
            <div> 
                 
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Table Lamp</p>
                <div class="img-box">
                    <img  class="shop-item-image" src="../img/lamp5.jpg" alt="lamp">
                </div>

                <p class="shop-item-details"> MILLERYR Table lamp
                    <a href="#" class="shop-item-price"> $ 39.99</a>   <!-- ????????????? -->
                </p>

                <div class="btn btn-primary shop-item-button">
                    <a  onclick=addedCart();>Add to Cart</a>
                </div>
            </div>
            </div>

            <!-- 2.lamp3-->
            <div> 
                <div class="slider-box">
                    <p class="shop-item-title" style="font-weight: lighter;">Round Lamp</p>                    
                    <div class="img-box">
                        <img class="shop-item-image" src="../img/lamp6.jpg" alt="lamp">
                    </div>
    
                    <p class="shop-item-details">  Glass USB Table Lamp
                        <a href="#" class="shop-item-price"> $ 199.99</a>   <!--  ???????????-->
                    </p>
    
                    <div class="btn btn-primary shop-item-button">
                        <a  onclick=addedCart();>Add to Cart</a>
                    </div>
                </div>
        
            </div>
            <!-- 2. lamp4 -->
            <div> 
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Vase antique </p>
                <div class="img-box">
                    <img class="shop-item-image" src="../img/lamp7.jpg" alt="lamp">
                </div>

                <p class="shop-item-details"> luxury vase antique 
                    <a href="#" class="shop-item-price"> $ 299.99</a>    <!-- ???????????  -->
                </p>
                <div class="btn btn-primary shop-item-button">
                    <a  onclick=addedCart();>Add to Cart</a>
                </div>
            </div>
       </div>
         

       
    </div><!-- end of second swiper container-->


      <!-- Swiper -->
      <div class="swiper-container">
      <div class="swiper-wrapper">
<!-- third category-->
<!-- sofa 3.1 -->
<div>
<div class="slider-box" >
    <p class="shop-item-title" style="font-weight: lighter;">MAGS SOFA</p>
    <div class="img-box">
        <img class="shop-item-image" src="../img/sofa4.jpg" alt="sofa1">
    </div>

    <p class="shop-item-details"> MAGS SOFA SOFT
        <a href="#" class="shop-item-price"> $ 599.99</a>    <!-- ???????????????? -->
    </p>

    <div class="btn btn-primary shop-item-button">
        <a  onclick=addedCart();>Add to Cart</a>
    </div>
</div>
</div>
      <div class="swiper-wrapper">

            <!-- sofa 3.2 -->
            <div>
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Black SOFA</p>
                <div class="img-box">
                    <img class="shop-item-image" src="../img/sofa1.jpg" alt="sofa1">
                </div>

                <p class="shop-item-details"> Cozy SOFA for 2 
                    <a href="#" class="shop-item-price"> $ 199.99</a>    <!-- ???????????????? -->
                </p>

                <div class="btn btn-primary shop-item-button">
                    <a  onclick=addedCart();>Add to Cart</a>
                </div>
            </div>
            </div>

            <!-- sofa 3.3-->
            <div> 
                <div class="slider-box">
                    <p class="shop-item-title" style="font-weight: lighter;">Luxury Unit SOFA </p>
                    <div class="img-box">
                        <img class="shop-item-image" src="../img/sofa2.jpg" alt="sofa2">
                    </div>
    
                    <p class="shop-item-details"> SOFA with white leather 
                        <a href="#" class="shop-item-price"> $ 299.99</a>    <!-- ??????????????????  -->
                    </p>
    
                    <div class="btn btn-primary shop-item-button">
                        <a  onclick=addedCart();>Add to Cart</a>
                    </div>
                </div>
        
            </div>
            <!-- sofa 3.4 -->
            <div>  
            <div class="slider-box">
                <p class="shop-item-title" style="font-weight: lighter;">Family SOFA </p>
                <div class="img-box">
                    <img class="shop-item-image" src="../img/sofa3.jpg" alt="sofa3">
                </div>

                <p class="shop-item-details"> Cozy sofa for 8 
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
require "include/footer.php";
?>
</html>