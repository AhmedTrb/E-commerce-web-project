<?php session_start() ;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="icon" href="assets/SetUpSprint.svg" type="image/icon type">
        <script src="sripts.js"></script>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="left">
                <div class="logo"><img src="assets/SetUpSprint.svg" alt="logo" height="30px"/></div>
                <nav>
                    <ul>
                        <li><a href="homePage.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="">Brands</a></li>
                    </ul>
                </nav>
            </div>
            <div class="icons">
                <div class='icon'><a href='login.php'><img src='assets/profile.svg' height='25px'/></a></div>
                <div class="icon"><a href=""><img src="assets/cart.svg" height="25px"/></a></div>
            </div>
        </header>
        <!-- ---------------------------------------------------------------------------------------------------- -->
        

        <section class="pr-main container">
            <div class="product-detail-img">
                <img src="assets/ryenCPU.png" alt="">
            </div>
            <div class="product-info">
                <h1 class="pr-name">Product Name</h1>
                <div class="rate">
                    <img src="assets/rating.svg" alt="" style="margin-right:30px;">
                    <div> 3.5/5</div>
                </div>

                <div class="pr-detail-price">
                    <div style="display:flex">
                        <div class="price-d">450.99$</div>
                        <div class="price-bd">500$</div>
                    </div>
                    <div class="discount"><p>-40%</p></div>
                </div>
                
                    <p class="product-description">AMD Ryzen 7 5800X CPU, a performance powerhouse designed to revolutionize your computing experience. With 8 cores and 16 threads, this processor delivers unmatched multitasking capabilities and seamless gaming performance.</p>
                
                <hr>
                <div class="bot">
                    <div class="quantiy">
                        <button onclick="decreaseQuantity('Q')">-</button>
                        <div id="Q">1</div>
                        <button onclick="increaseQuantity('Q')">+</button>
                    </div>
                    <button class="add-cart-btn" type="submit">Add to Cart</button>
                </div>
            </div>
        </section>

        

        <!-- Footer -->

        <footer>
            <div class="footer-container">
                <div class="footer-item">
                    <img src="assets/SetUpSprint.svg" slt="logo" />
                    <p>We have clothes that suits your style<br> and which you're proud to wear.<br> From women to men.</p>
                    <div class="socials"><a href="https://github.com/AhmedTrb/E-commerce-Website"><img src="assets/Social.svg" alt="socials"/></a></div>
                </div>
                <div class="footer-item">
                    <p class="title">Company</p>
                    <ul>
                        <li>About</li>
                        <li>Features</li>
                        <li>Works</li>
                        <li>Career</li>
                    </ul>
                </div>
                <div class="footer-item">
                    <p class="title">Help</p>
                    <ul>
                        <li>Costumer Support</li>
                        <li>Delivery Details</li>
                        <li>Terms & Conditions</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
                <div class="footer-item">
                    <p class="title">FAQ</p>
                    <ul>
                        <li>Account</li>
                        <li>Manage Deliveries</li>
                        <li>Orders</li>
                        <li>Payments</li>
                    </ul>
                </div>
            </div>
            <hr style="width: 90%;">
            <div class="flex-items">
                <p class="copyrights" >Shop.co © 2000-2023, All Rights Reserved</p>
                <div class="flex">
                    <img src="assets/visa.svg" alt="visa"/>
                </div> 
            </div>
        </footer>
        <script src="script2.js"></script>
</body>
</html>