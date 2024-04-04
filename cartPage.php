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
                        <li><a href="brandsPage.php">Brands</a></li>
                    </ul>
                </nav>
            </div>
            <div class="icons">
                <div class="icon"><a href="login.php"><img src="assets/profile.svg" height="25px"/></a></div>
                <div class="icon"><a href="cartPage.php"><img src="assets/cart.svg" height="25px"/></a></div>
            </div>
        </header>
        
        <!-- ---------------------------------------------------------------------------------------------------- -->
        <section class="container">
            <h1 class="cart-title">Your Cart</h1>
            <div class="cart-container">
                <div class="cart-items">
                    <!-- show all products in cart -->
                    <?php 
                        session_start();
                        
                        include "database.php";


                        $products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
                        $products = array();
                        $subtotal = 7.00;
                        $discounted =0.00 ;
                        $before_discount = 0.00;
                        if (isset($_SESSION['cart'])){
                            $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?')); // (?,?,?,? ...) for the sql query
                            $stmt = $connect->prepare('SELECT * FROM product WHERE ProductID IN (' . $array_to_question_marks . ')');

                            $stmt->execute(array_keys($products_in_cart));

                            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            
                            foreach ($products as $product) {
                                $ID = $product['ProductID'];
                                $before_discount+=$product['OldPrice']*(int)$products_in_cart[$ID] ;
                                if ($product['SpecialPrice']!=0) {
                                    $subtotal+=$product['SpecialPrice']*(int)$products_in_cart[$ID] ;
                                    $discounted+=$product['Discount']*(int)$products_in_cart[$ID] ;
                                } else $subtotal+=$product['OldPrice']*(int)$products_in_cart[$ID] ;
                        
                    ?>
                    <div class="cart-item">
                        <div class="left-cart-item">
                            <div><img src="<?php echo $product['ImageURL'] ?>" width="80dvw" height="80dvh"></div>
                            <div class="cart-item-info">
                                <h2><?php echo $product['ProductName']?></h2>
                                <h2><?php echo ($product['SpecialPrice']!=0)?$product['SpecialPrice']:  $product['OldPrice']?></h2>
                            </div>
                        </div>
                        <div class="right-cart-item">
                            <div class="cart-quantity">
                                <button onclick='decreaseQuantity("qt")'>-</button>
                                <div id="qt">1</div>
                                <button onclick='increaseQuantity("qt")'>+</button>
                            </div>
                            
                            <button><img src="assets/trash.svg"></button>
                        </div>
                    </div>
                    <?php } 
                        $_SESSION['total-bd'] = $before_discount ;
                        $_SESSION['ds'] = $discounted ;
                        $per = ($subtotal / $before_discount)*100 ;
                        if ($per<0 && $per>100) $per=0;
                        $_SESSION['per'] = $per ;
                        $_SESSION['total'] = $subtotal ;
                    } else echo "<h1>Cart Empty</h1>" ?>
                </div>
                <div class="cart-summary">
                    <h2>Order Summary</h2>
                    <hr>
                    <div class="sum">
                        <h5>Subtotal</h5>
                        <h4><?php echo $before_discount ?> DT</h4>
                    </div>
                    <div class="sum">
                        <h5>-<?php echo($_SESSION['per']>100)?0:$_SESSION['per']?>%</h5>
                        <div class="discount-price">-<?php echo $discounted ?> DT</div>
                    </div>
                    <div class="sum">
                        <h5>Delivery Fee</h5>
                        <h4 >7DT</h4>
                    </div>
                    <hr>
                    <div class="sum">
                        <h5>Total</h5>
                        <h4><?php echo $subtotal ?>DT</h4>
                    </div>
                    <a href="<?php echo (isset($_SESSION['userFname']) && !empty($_SESSION['cart']) )? 'checkoutPage.php' : 'signinPage.php'; ?>">
                    <button class="filter-btn">Go to Chekout <img src="assets/right-arrow.svg" color="white"></button>
                    </a>
                </div>
                
            </div>
        </section>

        <!-- Footer -->

        <footer>
            <div class="footer-container">
                <div class="footer-item">
                    <img src="assets/SetUpSprint.svg" alt="logo" />
                    <p>Elevate your PC setup with precision.<br> Discover top-tier components tailored to<br> your needs.Explore our curated selection <br>for peak performance.Build your dream rig<br> with SetupSprint.</p>
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
        <script src="script2.js"></script>
        
</body>
</html>