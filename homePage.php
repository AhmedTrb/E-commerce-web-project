<?php session_start() ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SetUpSprint</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/SetUpSprint.svg" type="image/icon type">
    <script src="assets/js/scripts.js"></script>
    
</head>
<body>
    <!-- Header -->
    <header>
        <div class="left">
            <div class="logo"><img src="assets/images/SetUpSprint.svg" alt="logo" height="30px"/></div>
            <nav>
                <ul>
                    <li><a href="homePage.php">Home</a></li>
                    <li><a href="pages/shopPage.php">Shop</a></li>
                    <li><a href="pages/brandsPage.php">Brands</a></li>
                </ul>
            </nav>
        </div>
        <div class="icons">
            <div class="icon"><a href="config/login.php"><img src="assets/images/profile.svg" height="25px"/></a></div>
            <div class="icon"><a href="pages/cartPage.php"><img src="assets/images/cart.svg" height="25px"/></a></div>
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
            <div class="brand"><img src="assets/images/amd.svg"/></div>
            <div class="brand"><img src="assets/images/logitech.svg"/></div>
            <div class="brand"><img src="assets/images/jbl.svg"/></div>
            <div class="brand"><img src="assets/images/nvidia.svg"/></div>
        </div>
        <div class="br1">
            <div class="brand"><img src="assets/images/intel.svg"/></div>
            <div class="brand"><img src="assets/images/msi.svg"/></div>
            <div class="brand"><img src="assets/images/lenovo.svg"/></div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------------------- -->
    


    <!-- background VIDEO  -->
    <section class="vbg">
        <video autoplay loop muted class="video-bg">
            <source src="assets/images/MY PC BUILD _ CINEMATIC B-ROLL.mp4" type="video/mp4">
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
                                    <div><img src="assets/images/ryenCPU.png" alt="product" class="prd-img"/></div>
                                    <p class="pr-name">AMD Ryzen 7 5800X CPU</p>
                                    <img src="assets/images/rating.svg" alt="rating">
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
    <!-- Feedbacks section -->
    <hr style="width: 90%;">
    <section class="container">
        <div class="title">
            <h1 class="title-text">OUR HAPPY COSTUMERS</h1>
        </div>
        <div class="Feedbacks">
            <ul>
                <li>
                <div class="feedback">
                    <div><img src="assets/images/rating.png" alt="rating"/></div>
                    <div style="display: flex;align-items: center;">
                        <h3>Brahmi Saif eddin</h3>
                        <img src="assets/images/check.svg" alt="" height="20px"/>
                    </div>
                    <p>As someone new to building PCs, I was a bit intimidated by the process at first. However, the ecommerce website for PC components made it incredibly simple. The user-friendly layout, combined with helpful guides and recommendations, gave me the confidence to select the right components for my needs.”</p>
                </div>
                </li>
                <li><div class="feedback">
                    <div><img src="assets/images/rating.png" alt="rating"/></div>
                    <div style="display: flex;align-items: center;">
                        <h3>Checbbi Med Ayoub</h3>
                        <img src="assets/images/check.svg" alt="" height="20px"/>
                    </div>
                    <p>"Shopping for PC components has never been easier! With a vast selection of high-quality products and seamless navigation, I was able to find everything I needed to build my dream gaming rig. The website's intuitive interface made browsing through different categories a breeze"</p>
                </div>
                </li>
                <li>
                <div class="feedback">
                    <div><img src="assets/images/rating.png" alt="rating"/></div>
                    <div style="display: flex;align-items: center;">
                        <h3>Nguira Mohamed</h3>
                        <img src="assets/images/check.svg" alt="" height="20px"/>
                    </div>
                    <p>I've been a loyal customer of SetUpSprint for years, and for good reason. Not only does it offer an extensive range of PC components, but the customer service is also top-notch. Whenever I have a question or need assistance with my order, the support team is always quick to respond and goes above and beyond to ensure my satisfaction.”</p>
                </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <img src="assets/images/SetUpSprint.svg" alt="logo" />
                <p>Elevate your PC setup with precision.<br> Discover top-tier components tailored<br> to your needs.Build your dream<br> rig with SetupSprint.</p>
                <div class="socials"><a href="https://github.com/AhmedTrb/E-commerce-web-project"><img src="assets/images/Social.svg" alt="socials"/></a></div>
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
                <img src="assets/images/visa.svg" alt="visa"/>
            </div> 
        </div>
    </footer>

</body>
</html>