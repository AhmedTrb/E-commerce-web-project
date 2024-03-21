<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="assets/SetUpSprint.svg" type="image/icon type">
        <script src="scripts.js"></script>
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
                <div class="icon"><a href="signinPage.php"><img src="assets/profile.svg" height="25px"/></a></div>
                <div class="icon"><a href="cartPage.php"><img src="assets/cart.svg" height="25px"/></a></div>
            </div>
        </header>
        
        <!-- ---------------------------------------------------------------------------------------------------- -->
        <section class="container">
            <h1 class="cart-title">Your Cart</h1>
            <div class="cart-container">
                <div class="cart-items">
                    <div class="cart-item">
                        <div class="left-cart-item">
                            <div><img src="assets/ryenCPU.png" width="80dvw" height="80dvh"></div>
                            <div class="cart-item-info">
                                <h2>Product Name</h2>
                                <h2>$399,9</h2>
                            </div>
                        </div>
                        <div class="right-cart-item">
                            <div class="cart-quantity">
                                <button>-</button>
                                <div id="qt">1</div>
                                <button>+</button>
                            </div>
                            <button><img src="assets/trash.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="cart-summary">
                    <h2>Order Summary</h2>
                    <hr>
                    <div class="sum">
                        <h5>Subtotal</h5>
                        <h4>$450</h4>
                    </div>
                    <div class="sum">
                        <h5>Discount (-20%)</h5>
                        <div class="discount-price">-$30</div>
                    </div>
                    <div class="sum">
                        <h5>Delivery Fee</h5>
                        <h4 >$15</h4>
                    </div>
                    <hr>
                    <div class="sum">
                        <h5>Total</h5>
                        <h4>$445</h4>
                    </div>
                    <button class="filter-btn">Go to Chekout <img src="assets/right-arrow.svg" color="white"></button>
                </div>
                
            </div>
        </section>

        <!-- Footer -->

        <footer>
            <div class="footer-container">
                <div class="footer-item">
                    <img src="assets/SetUpSprint.svg" alt="logo" />
                    <p>We have clothes that suits your style<br> and which you're proud to wear.<br> From women to men.</p>
                    <div class="socials"><img src="assets/Social.svg" alt="socials"/></div>
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
</body>
</html>