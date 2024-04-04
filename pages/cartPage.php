<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="../assets/css/style1.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="icon" href="../assets/images/SetUpSprint.svg" type="image/icon type">     
    </head>
    <body>
       <?php include "../includes/header.php" ?>
        <!--  -->
        <section class="container">
            <h1 class="cart-title">Your Cart</h1>
            <div class="cart-container">

                <!-- cart items -->
                <div class="cart-items">
                    <!-- show all products in cart -->
                    <?php include "../loaders/cartItemsLoader.php" ?>
                </div>

                <!-- cart summary  -->
                <div class="cart-summary">
                    <h2>Order Summary</h2>
                    <hr>
                    <div class="sum">
                        <h5>Subtotal</h5>
                        <h4><?php echo $before_discount ?> DT</h4>
                    </div>
                    <div class="sum">
                        <h5>-<?php echo($per>100)?0:$per?>%</h5>
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
                    <button class="filter-btn">Go to Chekout</button>
                    </a>
                </div>
            </div>
        </section>

        <?php include "../includes/footer.php" ?>
        <script src="script2.js"></script>
        
</body>
</html>