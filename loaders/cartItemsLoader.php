<?php
session_start();
                        
include "../includes/database.php";

$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 7.00;
$discounted =0.00 ;
$before_discount = 0.00;
$per=0;
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?')); // (?,?,?,? ...) for the sql query
    $stmt = $connect->prepare('SELECT * FROM product WHERE ProductID IN (' . $array_to_question_marks . ')');

    $stmt->execute(array_keys($products_in_cart));

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($products as $product) {
        // calculating the subtotal price / discount
        $ID = $product['ProductID'];
        $before_discount+=$product['OldPrice']*(int)$products_in_cart[$ID] ;
        if ($product['SpecialPrice']!=0) {
            $subtotal+=$product['SpecialPrice']*(int)$products_in_cart[$ID] ;
            $discounted+=$product['Discount']*(int)$products_in_cart[$ID] ;
        } else $subtotal+=$product['OldPrice']*(int)$products_in_cart[$ID] ;
?>
        <!-- displaying product items in cart -->
        <div class="cart-item">
        <div class="left-cart-item">
            <div><img src="<?php echo $product['ImageURL'] ?>" width="100dvw" height="100dvh"></div>
            <div class="cart-item-info">
                <h2><?php echo $product['ProductName']?></h2>
                <h2><?php echo ($product['SpecialPrice']!=0)?$product['SpecialPrice']:  $product['OldPrice']?> DT</h2>
            </div>
        </div>
        <div class="right-cart-item">
            <div class="cart-quantity">
                <button onclick='decreaseQuantity("qt")'>-</button>
                <div id="qt"><?php echo $products_in_cart[$ID] ?> </div>
                <button onclick='increaseQuantity("qt")'>+</button>
                <script src="../assets/js/script2.js"></script>
            </div>
            
            <form method="post" action="../config/deleteCartItem.php">
                <input type='hidden' name='productID' value="<?php echo $ID ?>">
                <input type='image' src='../assets/images/trash.svg' alt='Delete' width="30px" height="30px" style="border:none;cursor:pointer;margin-right:20px;">
                
            </form>
            
        </div>
        </div>
<?php } 
$_SESSION['total-bd'] = $before_discount ;
$_SESSION['ds'] = $discounted ;
$per = ($discounted / $before_discount)*100 ;
$_SESSION['per'] = $per;
$_SESSION['total'] = $subtotal ;
} else echo "<h1>Cart Empty</h1>" ?>

