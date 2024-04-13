<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/details.css">
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <title>Hardware Den</title>
</head>
<body>
    <header>
        <?php include('navbar.php');?>
    </header>

    <?php 

        include('data_conn.php');
        $id = $_GET['id'] ?? '';

        if($id >= 1 && $id <= 999999)
        {
            $sql = "SELECT * FROM laptop WHERE laptop_id = '$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $id= $row['laptop_id'];
            
            $imageLinks = explode("\n", $row["carousel_images"]);
            $descText = explode("\n", $row["about"]);
            $descLinks = explode("\n", $row["desc_images"]);
        }

        else if($id >= 1000000 && $id <= 1999999)
        {
            $sql = "SELECT * FROM pc WHERE pc_id = '$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $id= $row['pc_id'];
            
            $imageLinks = explode("\n", $row["carousel_images"]);
            $descText = explode("\n", $row["about"]);
        }

        else if($id >= 2000000 && $id <= 2999999)
        {
            $sql = "SELECT * FROM network_card WHERE network_card_id = '$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $id= $row['network_card_id'];
            
            $imageLinks = explode("\n", $row["carousel_images"]);
            $descText = explode("\n", $row["about"]);
        }

        if (isset($_COOKIE["user"])) 
        {
            $cookie_user = $_COOKIE["user"];

            $sql_id = "SELECT * FROM `login_credential` where user = '$cookie_user'";
            $result_id = mysqli_query($conn, $sql_id);
            $row_id = mysqli_fetch_array($result_id, MYSQLI_ASSOC);

            $UserID = 0;
            
            if (array_key_exists('id', $row_id)) {
                $UserID = $row_id["id"];
            }

            if($UserID = 0)
            {
                header('customer_login.php');
            }
        }
    ?>

    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="pc.php"><?php echo $row["manufacturer"].' '.$row["model_name"] ?></a>
    </div>
    
    <br>

    <div class="detail-grid-container">

        <div class="detail-grid-item">

            <div class="carousel">
                <div class="carousel-inner">
                    <?php foreach ($imageLinks as $index => $imageLink) { ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <?php  
                            
                            echo '<img src="' . $imageLink . '" alt="Image" style = "width: 30.0vw; max-height: 30.0vw;">'; ?>
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" onclick="carouselPrev()">&#8249;</button>
                <button class="carousel-control-next" onclick="carouselNext()">&#8250;</button>
            </div>

        </div>

        <div class="detail-grid-item">
        <?php
        if($id >= 1 && $id <= 999999)
        {
            echo '<a class="detail-title">' . $row["release_year"] . ' ' . $row["manufacturer"] . ' ' . $row["model_name"] . '</a> <input type="submit" value="Add To Cart" class="item-submit">' . '<input class="wishlist-btn" type="checkbox" id="wishlist-btn" value="'. $item_id = $row["laptop_id"]. '" /> <br>';
            echo '<div class="divider"></div><br>';
            echo '<a class="detail-price">₹ ' . $row["price"] . '</a><br><br>';
            echo '<a class="detail-spec-heading">Specifications:</a>';
            echo '<ul class="detail-spec-desc">';
            echo '<li>Brand: ' . $row["manufacturer"] . '</li>';
            echo '<li>Model Name: ' . $row["model_name"] . '</li>';
            echo '<li>Category: ' . $row["category"] . '</li>';
            echo '<li>Operating System: ' . $row["os"] . '</li>';
            echo '<li>Screen: ' . $row["screen_reso"] . ' | ' . $row["screen_size"] . '" Inches | ' . $row["panel_type"] . '</li>';
            echo '<li>Processor: ' . $row["cpu_brand"] . ' ' . $row["cpu_series"] . ' ' . $row["cpu_name"] . ' | Base Clock: ' . $row["cpu_speed"] . ' Ghz</li>';
            echo '<li>Graphics Card: ' . $row["gpu_type"] . ' | ' . $row["gpu_brand"] . ' ' . $row["gpu_series"] . ' | VRAM: ' . $row["vram"] . ' MB</li>';
            echo '<li>RAM: ' . $row["ram_size"] . 'GB DDR5 | ' . $row["ram_speed"] . ' MHz</li>';
            echo '<li>Storage: ' . $row["storage_type"] . ' | ' . $row["storage_size"] . ' GB</li>';
            echo '<li>Weight: ' . $row["weight"] . ' KG</li>';
            echo '</ul>';
            echo '<div class="icon-container">';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-rotate-left"></i>';
            echo '<br>7 Day <br> Replacement';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-truck-ramp-box"></i>';
            echo '<br>Free <br> Delivery';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-calendar-check"></i>';
            echo '<br>Warranty <br> Policy';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-award"></i>';
            echo '<br>Top <br> Brand';
            echo '</div>';
            echo '</div>';
        }

        else if($id >= 1000000 && $id <= 1999999)
        {
            echo '<a class="detail-title">' . $row["manufacturer"] . ' ' . $row["model_name"] . '</a> <input type="submit" value="Add To Cart" class="item-submit"> <br>';
            echo '<div class="divider"></div><br>';
            echo '<a class="detail-price">₹ ' . $row["price"] . '</a><br><br>';
            echo '<a class="detail-spec-heading">Specifications:</a>';
            echo '<ul class="detail-spec-desc">';
            echo '<li>Brand: ' . $row["manufacturer"] . '</li>';
            echo '<li>Model Name: ' . $row["model_name"] . '</li>';
            echo '<li>Category: ' . $row["category"] . '</li>';
            echo '<li>Processor: ' . $row["cpu_brand"] . ' ' . $row["cpu_series"] . ' ' . $row["cpu_name"] . ' | Base Clock: ' . $row["cpu_speed"] . ' Ghz</li>';
            echo '<li>Graphics Card: ' . $row["gpu_type"] . ' | ' . $row["gpu_brand"] . ' ' . $row["gpu_series"] . ' | VRAM: ' . $row["vram"] . ' MB</li>';
            echo '<li>RAM: ' . $row["ram_size"] . 'GB DDR5 | ' . $row["ram_speed"] . ' MHz</li>';
            echo '<li>Storage: ' . $row["storage_type"] . ' | ' . $row["storage_size"] . ' GB</li>';
            echo '<li>Power Supply: ' . $row["power_supply"] . '' . $row["power_supply_detail"] . '</li>';
            echo '</ul>';
            echo '<div class="icon-container">';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-rotate-left"></i>';
            echo '<br>7 Day <br> Replacement';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-truck-ramp-box"></i>';
            echo '<br>Free <br> Delivery';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-calendar-check"></i>';
            echo '<br>Warranty <br> Policy';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-award"></i>';
            echo '<br>Top <br> Brand';
            echo '</div>';
            echo '</div>';
        }

        else if($id >= 2000000 && $id <= 2999999)
        {
            echo '<a class="detail-title">' . $row["manufacturer"] . ' ' . $row["model_name"] . '</a> <input type="submit" value="Add To Cart" class="item-submit"> <br>';
            echo '<div class="divider"></div><br>';
            echo '<a class="detail-price">₹ ' . $row["price"] . '</a><br><br>';
            echo '<a class="detail-spec-heading">Specifications:</a>';
            echo '<ul class="detail-spec-desc">';
            echo '<li>Brand: ' . $row["manufacturer"] . '</li>';
            echo '<li>Model Name: ' . $row["model_name"] . '</li>';
            echo '<li>Category: ' . $row["category"] . '</li>';
            echo '</ul>';
            echo '<div class="icon-container">';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-rotate-left"></i>';
            echo '<br>7 Day <br> Replacement';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-truck-ramp-box"></i>';
            echo '<br>Free <br> Delivery';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-calendar-check"></i>';
            echo '<br>Warranty <br> Policy';
            echo '</div>';
            echo '<div class="icon-box">';
            echo '<i class="fa-solid fa-award"></i>';
            echo '<br>Top <br> Brand';
            echo '</div>';
            echo '</div>';
        }
        ?>


        </div>
    </div>

    <div class="divider" style = "width: 100%;"></div><br>

    <div class="desc-grid-container">
        
        <?php
            if($id >= 1 && $id <= 999999)
            {
                echo '<div class="desc-grid-item">';
                echo '<ul class="detail-spec-desc" style="margin-left: 9.1vw; margin-right: 9.1vw;">';
                foreach ($descText as $index => $text) {
                    echo '<li>' . $text . '</li><br>';
                }
                echo '</ul>';
                echo '</div>';

                echo '<div class="divider" style="width: 100%;"></div><br>';

                echo '<div class="desc-grid-item" style="justify-items: center;">';
                foreach ($descLinks as $index => $link) {
                    echo '<img src="' . $link . '" alt="" style="max-width: 78.125vw; max-height: 77.47vh; display: block;margin-left: auto;margin-right: auto;">';
                }
                echo '</div>';
            }
            else if($id >= 100000 && $id <= 1999999)
            {
                echo '<div class="desc-grid-item">';
                echo '<ul class="detail-spec-desc" style="margin-left: 9.1vw; margin-right: 9.1vw;">';
                foreach ($descText as $index => $text) {
                    echo '<li>' . $text . '</li><br>';
                }
                echo '</ul>';
                echo '</div>';

                echo '<div class="divider" style="width: 100%;"></div><br>';
            }
            else if($id >= 200000 && $id <= 2999999)
            {
                echo '<div class="desc-grid-item">';
                echo '<ul class="detail-spec-desc" style="margin-left: 9.1vw; margin-right: 9.1vw;">';
                foreach ($descText as $index => $text) {
                    echo '<li>' . $text . '</li><br>';
                }
                echo '</ul>';
                echo '</div>';

                echo '<div class="divider" style="width: 100%;"></div><br>';
            }
        ?>


    </div>

    <script src = "../js/carousel.js"> </script>

    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>

</body>
</html>