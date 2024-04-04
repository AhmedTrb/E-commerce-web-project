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
        <?php include "header.php" ?>
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
        

        <?php include "footer.php" ?>
        <script src="script2.js"></script>
</body>
</html>