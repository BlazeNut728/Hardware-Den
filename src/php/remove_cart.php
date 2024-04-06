<?php
session_start();

// Check if product ID is set in the POST request
if(isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Loop through cart items to find the item with the specified product ID
    foreach($_SESSION['cart'] as $key => $item) {
        if($item['product_id'] === $product_id) {
            // Remove the item from the cart
            unset($_SESSION['cart'][$key]);
            // Reset array keys to ensure they are sequential
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            // Redirect back to the cart page
            header('Location: display_cart.php');
            exit();
        }
    }
}

// If product ID is not set or the item is not found in the cart, redirect to the cart page
header('Location: display_cart.php');
exit();
