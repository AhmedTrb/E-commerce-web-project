<?php
session_start();

if (isset($_POST['productID']) && isset($_SESSION['cart'][$_POST['productID']])) {
    unset($_SESSION['cart'][$_POST['productID']]);
}
header("Location: ../pages/cartPage.php");
exit();
?>