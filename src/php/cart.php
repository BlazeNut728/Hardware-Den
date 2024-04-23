<?php
session_start();

if(isset($_COOKIE["user"]))
{

    if(isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['price'])) {

        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $display_image = $_POST['display_image'];
        $desc = $_POST['desc'];
        $quantity = $_POST['quantity'];

        
        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        
        $cart_item = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'price' => $price,
            'display_image' => $display_image,
            'desc' => $desc,
            'quantity' => $quantity
        );
        array_push($_SESSION['cart'], $cart_item);

        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        
        header('Location: index.php');
        exit();
    }

}
else {
        
    header('Location: customer_dashboard.php');
    exit();
}