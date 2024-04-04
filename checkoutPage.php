<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="icon" href="assets/SetUpSprint.svg" type="image/icon type">
    </head>
    <body> 
        <?php session_start() ;?>
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
        <!-- ------------------------------------------------------------------------------------------------- -->




        <section class="container">
            <h1 class="cart-title">Check out</h1>
                        
        <div class="info-container">
            <div class="check-form">    
                    <label class="formm-label">Card Number</label>
                    <input type="text" class="formm" style ="width:95%" placeholder="XXXX - XXXX - XXXX - XXXX">
                    <img class="visa-img" src="assets/visaa.svg"  >
                    <div style="display:flex">
                        <div style="width:50%">
                                <label class="formm-label">Expiration Date</label>
                                <input  style ="width:90%" type="date" class="formm" placeholder="MM/YY" required>
                            </div>
                            <div style="width:50%">
                                <label class="formm-label">CVC</label>
                                <input  style ="width:90%" type="text" class="formm" placeholder="CVC" required>
                            </div>
                        </div>    
                        <div style="display:flex ">
                            <div style="width:50%">
                                <label class="formm-label ">country</label>
                                <input type="text" class="formm" style ="width:90%" placeholder="Tunisia" required>
                            </div>
                            <div style="width:50%">
                                <label class="formm-label">Postal Code</label>
                                <input  style ="width:90%" type="number" class="formm" placeholder="9140" required>
                            </div>
                        </div>
                        <div>
                            <form method="POST" action="orderManagement.php">
                                <input type="hidden" name="">
                                <button class="purchasing-btn" type="submit">Confirm Purchase<img src="assets/right-arrow.svg" color="white"></button>
                            </form>
                        </div>
                </div>
                <div class="cartt-summary">
                    <h2>Order Summary</h2>
                    <hr>
                    <div class="sum">
                        <h5>Subtotal</h5>
                        <h4><?php echo $_SESSION['total-bd']?> DT</h4>
                    </div>
                    <div class="sum">
                        <h5>-<?php echo($_SESSION['per']>100)?0:$_SESSION['per']?>%</h5>
                        <div class="discount-price">-<?php echo $_SESSION['ds']?> DT</div>
                    </div>
                    <div class="sum">
                        <h5>Delivery Fee</h5>
                        <h4 >7 DT</h4>
                    </div>
                    <hr>
                    <div class="sum">
                        <h5>Total</h5>
                        <h4><?php echo $_SESSION['total']?> DT</h4>
                    </div>
                </div>
            </div>   
        </section>

        <!-- footer ---- -->
        <footer>
            <div class="footer-container">
                <div class="footer-item">
                 <img src="assets/SetUpSprint.svg" alt="logo" />
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
    </body>