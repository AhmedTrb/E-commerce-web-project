<?php 

include "../includes/database.php" ;

session_start();

$cliendID = $_SESSION['ClientID'] ;
$orderDate = date('Y-m-d');
$total = $_SESSION['total'];
$order_status  = "Pending" ;

$sql  = "INSERT INTO Orders (ClientID, OrderDate, TotalAmount, OrderStatus) VALUES (?, ?, ?, ?)";

// inserting data in the orders table 
$stm = $connect->prepare($sql);
$stm->execute([$cliendID,$orderDate,$total,$order_status]);

// getting the orderID
$orderID = $connect->LastInsertId();

foreach ($_SESSION['cart'] as $productID => $quantity) {
    $productID = intval($productID);
    $quantity = intval($quantity);

    // Get the price of the product from the Product table 
    // we take the specialprice if != 0 and oldprice if = 0
    $getPriceQuery = "SELECT CASE WHEN SpecialPrice = 0 THEN OldPrice ELSE SpecialPrice END FROM Product WHERE ProductID = ?";
    $stm = $connect->prepare($getPriceQuery);
    $stm->execute([$productID]);
    $price = $stm->fetchColumn();

    // Calculate subtotal
    $subtotal = $price * $quantity;

    // Insert data into the OrderDetail table
    $insertOrderDetailQuery = "INSERT INTO OrderDetail (OrderID, ProductID, Quantity, Subtotal) VALUES (?, ?, ?, ?)";
    $stmt = $connect->prepare($insertOrderDetailQuery);
    $stmt->execute([$orderID, $productID, $quantity, $subtotal]);
}

// Clear the cart after successful checkout
unset($_SESSION['cart']);

header("Location: ../pages/orderConfirmedPage.php");
exit();


