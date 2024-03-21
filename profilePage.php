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
            <div class="top">
                <h1 class="cart-title" style="margin-right:35%;">Profile</h1>
                <h1 class="cart-title">Welcome Back User !</h1>
            </div>
            <hr>
            <div>
                <h2 class="medium-text">Personal Information</h2>
                <!-- Users's Personal information  --------------->
                <div class="personal-info">
                    <div class="info">
                        <h4>Name :</h4>
                        <h4>Email :</h4>
                        <h4>Phone Number :</h4>
                        <h4>Default Adress :</h4>
                    </div>
                    <div class="info-details">
                        <h3>Test Name</h3>
                        <h3>testshop12@gmail.com</h3>
                        <h3>998877220</h3>
                        <h3>99 Saxon Street Hammonton, NJ 08037</h3>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------------------------------------------- -->
            <!-- Table displaying all the past purshases of the user -->
            <div class="past-purshase">
                <h2 class="medium-text">Past Purshases :</h2>
                <table width="100%">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Product</td>
                            <td>Qte</td>
                            <td>Price</td>
                            <td>Date</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pr-i"><img src="assets/RAM.png"></td>
                            <td>Corsair Vengeance RGB Pro 16GB</td>
                            <td>2</td>
                            <td>$260</td>
                            <td>12/08/2023</td>
                            <td>Delivered</td>
                        </tr>
                        <tr>
                            <td class="pr-i"><img src="assets/RAM.png"></td>
                            <td>Corsair Vengeance RGB Pro 16GB</td>
                            <td>2</td>
                            <td>$260</td>
                            <td>12/08/2023</td>
                            <td>Delivered</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <!-- --------------------------------------------------------------------------------------- -->
        </section>

        <!-- Footer -->

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
</html>