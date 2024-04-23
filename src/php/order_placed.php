<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cart.css">
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <title>Hardware Den</title>
</head>
<body>
    <?php include('navbar.php');?>

    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="display_cart.php">Cart</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="order_placed.php">Order</a>
    </div>

    <div class= "ar">
        <a class="stc"> Order </a> <br><br>
    </div>


    <?php

        error_reporting(0);
        session_start();
        include("data_conn.php");

        if (isset($_POST['totalWithGST'])) {
            $totalWithGST = $_POST['totalWithGST'];
            
            if(empty($_SESSION['cart'])) {
                header('Location: cart.php');
            } else {
                foreach($_SESSION['cart'] as $item) {
                    $selectq = $item['quantity'];
                    $productId = $item['product_id'];

                    if ($productId >= 1 && $productId <= 1000000) {
                        $tableName = "laptop";
                    } elseif ($productId >= 1000000 && $productId <= 1999999) {
                        $tableName = "pc";
                    }
                    elseif ($productId >= 2000000 && $productId <= 2999999) {
                        $tableName = "network_card";
                    }

                    $sql = "SELECT * FROM $tableName WHERE {$tableName}_id = '$productId'";
                    $result = mysqli_query($conn, $sql);

                    if($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        if ($row["stock"] >= $selectq) {
                            $updateq = $row["stock"] - $selectq;
                            $sql = "UPDATE $tableName SET stock = '$updateq' WHERE {$tableName}_id = '$productId'";
                            $result = mysqli_query($conn, $sql);
                            if(!$result) {
                                echo "Error updating stock";
                            }
                        } else {
                            echo "Items Unavailable";
                        }
                    } else {
                        echo "Product not found";
                    }
                }
            } 
        } else {
            header("display_cart.php");
        }
    ?>

    <?php
        error_reporting(0);
        include("data_conn.php");

        if (isset($_POST['totalWithGST'])) {
            $totalWithGST = $_POST['totalWithGST'];
            
            if(empty($_SESSION['cart'])) {
                header('Location: cart.php');
            } else {
            
                $order_id = uniqid('order_');

                if(isset($_COOKIE['user'])) {

                    // Fetch customer ID using cookie_user
                    $cookie_user = $_COOKIE['user'];
                    $sql = "SELECT * FROM `login_credential` where user = '$cookie_user'";
                    $r1 = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($r1, MYSQLI_ASSOC);

                    $customer_id = $row['id'];
                } else {
                    
                    echo "Customer ID not found";
                    exit;
                }

                
                $product_ids = [];
                $quantities = [];
                foreach($_SESSION['cart'] as $item) {
                    $product_ids[] = $item['product_id'];
                    $quantities[] = $item['quantity'];
                }
                $product_ids_json = json_encode($product_ids);
                $quantities_json = json_encode($quantities);

                
                $payment_id = uniqid('payment_');

                // Insert into order_log table
                $sql = "INSERT INTO order_logs (order_id, customer_id, product_id, payment_id, amount, quantity) 
                        VALUES ('$order_id', '$customer_id', '$product_ids_json', '$payment_id', '$totalWithGST', '$quantities_json')";
                $result = mysqli_query($conn, $sql);

                if($result) {

                    session_destroy();
                    echo '<div style="font-family: Poppins; font-size: 2.0vW; font-style: normal; font-weight: 600; color:#ff8400; margin-left: 13.3vw;">Your Order has been Placed</div>' ;
                    exit;
                } else {
                    echo "Error inserting into order_log table";
                }
            } 
        } else {
            echo '<div style="font-family: Poppins; font-size: 2.0vW; font-style: normal; font-weight: 600; color:#ff8400; margin-left: 13.3vw;">Add Some Items to the Cart first</div>';
        }
    ?>



</body>
</html>
