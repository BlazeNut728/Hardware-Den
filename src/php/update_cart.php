<?php
session_start();


if(isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    
    foreach($_SESSION['cart'] as &$item) {
        if($item['product_id'] === $product_id) {
            
            $item['quantity'] = $quantity;
            
            header('Location: display_cart.php');
            exit();
        }
    }
}


$_SESSION['error_message'] = "Unable to update quantity. Please try again.";
header('Location: display_cart.php');
exit();
