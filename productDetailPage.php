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
                <div class="icon"><a href="cartPage.php"><img src="assets/cart.svg" height="25px"/></a></div>
            </div>
        </header>
        <!-- ---------------------------------------------------------------------------------------------------- -->
        
        <section class="pr-main container">
            <?php 
                include "database.php" ;
                session_start();

                if (isset($_GET["ID"]) && is_numeric($_GET['ID'])){
                    $id = htmlspecialchars($_GET['ID']);
                    
                    $sql = "SELECT * FROM product WHERE ProductID = ?";
                    $stm = $connect->prepare($sql);
                    $stm->execute([$id]);

                    
                    $product = $stm->fetch(PDO::FETCH_ASSOC);
                }
            ?>
            <div class="product-detail-img">
                <img src="<?php echo $product['ImageURL'] ?>" alt="">
            </div>
            <div class="product-info">
                <h1 class="pr-name"><?php echo $product['ProductName'] ?></h1>
                <div class="rate">
                    <img src="assets/rating.svg" alt="" style="margin-right:30px;">
                    <div><?php echo $product['Rating']?></div>
                </div>

                <div class="pr-detail-price">
                    <?php
                    if ($product['SpecialPrice']!=0){
                            echo "<div style='display:flex'>";
                            echo"<div class='price-d'>".$product["SpecialPrice"]." DT</div>";
                            echo "<div class='price-bd'>".$product['OldPrice']." DT</div>";
                            echo"<div class='discount'><p>".$product['Discount']." DT</p></div>" ;
                            echo "</div>";
                        } else echo "<div class='price-d'>".$product['OldPrice']." DT</div>";
                    
                    ?>
                </div>
                
                    <p class="product-description"><?php echo $product['Description'] ?></p>
                
                <hr>
                <div class="bot">
                    <div class="quantiy">
                        <button onclick="decreaseQuantity('Q')">-</button>
                        <form action="cartManagement.php" method='POST'>
                            <input type="text" id="Q" name="quantity" value="1" min="1" />
                        </form>
                        <button onclick="increaseQuantity('Q')">+</button>
                    </div>
                    <form action="cartManagement.php" method='POST'>
                        <input class="add-cart-btn" type="submit" name="add_to_cart" value="Add to Cart"/>
                        <input type="hidden" name='q' value="1">
                        <input type="hidden" name='productID' value="<?php echo $product['ProductID'] ?>">
                    </form>
                </div>
            </div>
        </section>
                        
        <?php 
            if (isset($_POST['quantity'])) echo "quantity set" ;
        ?>
        

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