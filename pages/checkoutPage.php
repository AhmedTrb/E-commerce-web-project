<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/style1.css">
        <link rel="icon" href="../assets/SetUpSprint.svg" type="image/icon type">
    </head>
    <body> 
        <?php session_start() ;?>
        <?php include "../includes/header.php" ?>



        <section class="container">
            <h1 class="cart-title">Check out</h1>
                        
        <div class="info-container">
            <div class="check-form">    
                <label class="formm-label">Card Number</label>
                <input type="text" class="formm" style ="width:95%" placeholder="XXXX - XXXX - XXXX - XXXX">
                <img class="visa-img" src="../assets/images/visaa.svg"  >
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
                        <form method="POST" action="../config/orderManagement.php">
                            <input type="hidden" name="">
                            <button class="purchasing-btn" type="submit">Confirm Purchase<img src="../assets/images/right-arrow.svg" color="white"></button>
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

        <?php include "../includes/footer.php" ?>
    </body>