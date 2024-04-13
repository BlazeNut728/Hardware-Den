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
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="display_cart.php">Cart</a>
    </div>

    <div class= "ar">
        <a class="stc"> Shopping Cart </a> <br><br>
    </div>

        <?php      
            include('data_conn.php');
            
            if(empty($_SESSION['cart'])) {
                echo '<br><br><div style="font-family: Poppins; font-size: 2.0vW; font-style: normal; font-weight: 600; color:#ff8400; margin-left: 13.3vw;">Your Cart is Empty</div>';
                echo '<div style="font-family: Poppins; font-size: 2.0vW; font-style: normal; font-weight: 600; color:#ff8400; margin-left: 13.3vw;">Add Some Items and Come Back Later!</div>';
            } else {

            foreach($_SESSION['cart'] as $item) {

                echo '<div class = "cart-item">
                    <div class = "cart-item-img">
                        <img class = "cart-img" src = "'. $item['display_image'] .'">'.
                    '</div>
                    <div class ="cart-item-info">
                        <a class = cart-item-head >' . $item['product_name']. '</a>' .
                        '<a class = cart-item-desc >'. $item['desc'] . '</a>

                    </div>
                    <div class = "cart-item-end">
                        <a class = cart-item-price id= "id="cart-item-price">₹ ' . $item['price'] .'</a>' .

                        '<form action="update_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="'. $item['product_id'].'">
                            <select class = "cart-item-quantity" name="quantity" onchange="updateTotalPrice(this,' . $item['price'] . $item['product_id'] . ')">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </form> <br>' .
                        
                        '<form action="remove_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="'. $item['product_id'].'">
                            <input type="submit" name="remove_from_cart" value="Remove" class = "cart-item-remove">
                        </form>
                    </div>
                </div> <br>';

                }
            } 
        ?>

        

        <?php

        if(empty($_SESSION['cart'])) {
            
        } 
        
        else {

            function calculateTotalWithGST($cart) {
                $total = 0;
                foreach ($cart as $item) {
                    echo $item['quantity'];
                    $total += $item['price'] * $item['quantity'];
                }
                $gst = $total * 0.18;
                $totalWithGST = $total + $gst;

                return array('totalWithGST' => $totalWithGST, 'gst' => $gst , 'total' => $total);
            }

            $totals = calculateTotalWithGST($_SESSION['cart']);

            echo '<br><br><div class="divider"></div><br>'. 
            
            '<div class="cart-total">' .

            '<a class = "total-title">Original: </a>' .
            '<a class = "total-amount total-amount3"> ₹' . number_format($totals['total'], 2) . '</a><br><br>' .

            '<a class = "total-title">GST (18%): </a>' .
            '<a class = "total-amount total-amount1"> ₹' . number_format($totals['gst'], 2) . '</a><br><br>' .

            '<div class="separator"></div><br>' .

            '<a class = "total-title">Total: </a>' .
            '<a class = "total-amount2"> ₹' . number_format($totals['totalWithGST'], 2) . '</a><br>' .

            '</div>';
        }

        ?>

        <script>
            function updateTotalPrice(select, pricePerItem, itemId) {
                var quantity = parseInt(select.value);
                var totalPrice = pricePerItem * quantity;
                var totalPriceElement = document.getElementById('cart-item-price' + itemId);
                if (totalPriceElement) {
                    totalPriceElement.textContent = '₹ ' + totalPrice.toFixed(2);
                } else {
                    console.error('Total price element not found');
                }

                // Recalculate total amount for all items
                var cartItems = document.querySelectorAll('.cart-item');
                var total = 0;
                cartItems.forEach(function(item) {
                    var itemQuantity = parseInt(item.querySelector('.cart-item-quantity').value);
                    var itemPrice = parseFloat(item.querySelector('.cart-item-price').textContent.replace('₹ ', ''));
                    total += itemQuantity * itemPrice;
                });

                var gst = total * 0.18;
                var totalWithGST = total + gst;

                var totalAmountElements = document.querySelectorAll('.total-amount3');
                totalAmountElements.forEach(function(element) {
                    element.textContent = '₹ ' + total.toFixed(2);
                });

                var totalAmountElements = document.querySelectorAll('.total-amount1');
                totalAmountElements.forEach(function(element) {
                    element.textContent = '₹ ' + gst.toFixed(2);
                });

                var totalAmountElements = document.querySelectorAll('.total-amount2');
                totalAmountElements.forEach(function(element) {
                    element.textContent = '₹ ' + totalWithGST.toFixed(2);
                });
            }
        </script>


    
    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>
</body>
</html>