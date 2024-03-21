<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SetUpSprint</title>
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
    
    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-left">
            <h1 class="hero-text">ALL YOU NEED <br>TO BUILD<br>A PERFECT<br> SETUP</h1>
            <button class="shop-btn"><a href="">Shop Now</a></button>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------------------------------- -->
    
    <!-- Stats Section -->
    <section class="stats-section">
            <div>
                <p><span class="numbers" id="counter1"></span><span class="desc-number"><br>International Brands</span></p>
            </div>
            <div class="mid">
                <p><span class="numbers" id="counter2"></span><span class="desc-number"><br>High-Quality Products</span></p>
            </div>
            <div>
                <p><span class="numbers" id="counter3"></span><span class="desc-number"><br>Happy Customers</span></p>
            </div>
    </section>
    <!-- ---------------------------------------------------------------------------------------------- -->
    
    
    <!-- brands Section -->
    <section class="brands-section">
        <div class="br1">
            <div class="brand"><img src="assets/amd.svg"/></div>
            <div class="brand"><img src="assets/logitech.svg"/></div>
            <div class="brand"><img src="assets/jbl.svg"/></div>
            <div class="brand"><img src="assets/nvidia.svg"/></div>
        </div>
        <div class="br1">
            <div class="brand"><img src="assets/intel.svg"/></div>
            <div class="brand"><img src="assets/msi.svg"/></div>
            <div class="brand"><img src="assets/lenovo.svg"/></div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------------------- -->
    


    <!-- background VIDEO  -->
    <section class="vbg">
        <video autoplay loop muted class="video-bg">
            <source src="assets/MY PC BUILD _ CINEMATIC B-ROLL.mp4" type="video/mp4">
        </video>
    </section>
    <!-- ------------------------------------------------------------------------------------------------------- -->
    
    
    <!-- Most selled Products section -->
    <section class="container">
        <div class="title">
            <h1 class="title-text">MOST SELLED PRODUCTS</h1>
        </div>
        <div class="products-list">
            <ul>
                <?php 
                    for ($x=0; $x<5; $x++) {
                        echo '<li><a href="">
                                <div class="product-item">
                                    <div><img src="assets/ryenCPU.png" alt="product" class="prd-img"/></div>
                                    <p class="pr-name">AMD Ryzen 7 5800X CPU</p>
                                    <img src="assets/rating.svg" alt="rating">
                                    <p class="pr-price">399.99$</p>  
                                </div>
                            </a></li>';
                    } 
                
                ?>
            </ul>
        </div>

        <div class="btn-div">
            <button class="btn"><a href="">View All</a></button>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <hr style="width: 90%;">
    <!-- Feedbacks section -->
    <section class="container">
        <div class="title">
            <h1 class="title-text">OUR HAPPY COSTUMERS</h1>
        </div>
        <div class="Feedbacks">
            <div class="feedback">
                <div><img src="assets/rating.png" alt="rating"/></div>
                <div style="display: flex;align-items: center;">
                    <h3>Sarah M.</h3>
                    <img src="assets/check.png" alt="" height="20px"/>
                </div>
                <p>"I'm blown away by the quality and style of the clothes I received from Shop.co. From casual wear to elegant dresses, every piece I've bought has exceeded my expectations.”</p>
            </div>
            <div class="feedback">
                <div><img src="assets/rating.png" alt="rating"/></div>
                <div style="display: flex;align-items: center;">
                    <h3>Sarah M.</h3>
                    <img src="assets/check.png" alt="" height="20px"/>
                </div>
                <p>"I'm blown away by the quality and style of the clothes I received from Shop.co. From casual wear to elegant dresses, every piece I've bought has exceeded my expectations.”</p>
            </div>
            <div class="feedback">
                <div><img src="assets/rating.png" alt="rating"/></div>
                <div style="display: flex;align-items: center;">
                    <h3>Sarah M.</h3>
                    <img src="assets/check.png" alt="" height="20px"/>
                </div>
                <p>"I'm blown away by the quality and style of the clothes I received from Shop.co. From casual wear to elegant dresses, every piece I've bought has exceeded my expectations.”</p>
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

</body>
</html>