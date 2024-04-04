<?php

session_start();

if (isset($_POST['q']) && isset($_POST['productID']) && is_numeric($_POST['productID'])){
    $quantity = $_POST['q'] ;

    $ID = $_POST['productID'];

    include "../includes/database.php" ;

    $stm = $connect->prepare('SELECT * FROM product WHERE ProductID = ?') ;
    $stm->execute([$ID]) ;

    $prod = $stm->fetch(PDO::FETCH_ASSOC);

    if ($prod && $quantity > 0) {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            $_SESSION['cart'][$ID] = $quantity ;
        } else {
            $_SESSION['cart'] = array($ID => $quantity) ;
        }
    }
    var_dump($_SESSION);
    header("Location:../pages/shopPage.php");
} else {
    header("Location:homePage.php");
    exit();
}
            