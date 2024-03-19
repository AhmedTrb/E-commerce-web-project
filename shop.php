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
                <div class="icon"><a href=""><img src="assets/cart.svg" height="25px"/></a></div>
            </div>
        </header>
        
        <!-- ---------------------------------------------------------------------------------------------------- -->
        <!-- SHOP -->
        <section class="container main-shop">
            <!-- Filter Products -->
            <div class="filters-card">
                <div style="display:flex;justify-content:space-between;">
                    <h2 class="fliter-text">Filters</h2>
                    <img src="assets/filter.svg">
                </div>
                <hr>
                <div class="filter-detail">
                    <ol>
                        <li>GPU</li>
                        <li>CPU</li>
                        <li>Intel</li>
                    </ol>
                </div>
                <h2 class="fliter-text">Brands</h2>
                <hr>
                <div class="filter-detail">
                    <ol>
                        <li>Intel</li>
                        <li>Intel</li>
                        <li>Intel</li>
                        <li>Intel</li>
                        <li>Intel</li>
                    </ol>
                </div>
                <h2 class="fliter-text">Price</h2>
                <hr>
                <div class="slider-track"></div>
                    <input type="range" min="0" max="100" value="30" id="slider-1" oninput="slideOne()">
                    <input type="range" min="0" max="100" value="70" id="slider-2" oninput="slideTwo()">
                <hr>
                <button class="filter-btn">Aplly Filters</button>

            </div>

            <!-- Shop products -->
            <div class="shop-right">
                <div class="shop-products-list">
                    <div>
                        <h2 class="medium-title">Shop</h2>
                    </div>
                    <ul>
                        <?php include 'ProductsBuilder.php' ?>
                    </ul>
                </div>
                <hr style="width: 90%;">

                <!-- Pages footer -->
                <div class="page-footer">
                    <button class="btn-p"><img src="assets/left-arrow.svg">Previous</button>

                    <div class="pages">
                        <div class="page-item">1</div>
                    </div>

                    <button class="btn-p">
                        <div style="display:flex;justify-content:space-between;align-items:center;">
                        <div>Next</div><img src="assets/right-arrow.svg"> 
                        </div>
                         
                    </button>
                </div>
            </div>
        </section>

    <!-- Footer -->

    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <img src="assets/SetUpSprint.svg" slt="logo" />
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