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

        <div clas="order-confirmation">
            <img src="assets/tick.svg" alt="tick image">
            <h1>Your order has been <br>confirmed</h1>
        </div>


        

        <!-- footer ---- -->
        <footer>
            <div class="footer-container">
                <div class="footer-item">
                    <img src="assets/SetUpSprint.svg" alt="logo" />
                    <p>Elevate your PC setup with precision.<br> Discover top-tier components tailored<br> to your needs.Build your dream<br> rig with SetupSprint.</p>
                    <div class="socials"><a href="https://github.com/AhmedTrb/E-commerce-web-project"><img src="assets/Social.svg" alt="socials"/></a></div>
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