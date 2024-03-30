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
            <a class="detail-title"><?php echo $row["release_year"].' '. $row["manufacturer"].' '.$row["model_name"] ?> </a> <input type="submit" value="Add To Cart" class="item-submit"> <br> 
                
            <div class="divider"></div><br>
            
            <a class="detail-price">₹ <?php echo $row["price"] ?> </a><br><br>

            <a class="detail-spec-heading">Specifications:</a>

            <ul class = "detail-spec-desc" >
                <li>Brand: <?php echo $row["manufacturer"] ?> </li>
                <li>Model Name: <?php echo $row["model_name"] ?> </li>
                <li>Category: <?php echo $row["category"] ?> </li>
                <li>Operating System: <?php echo $row["os"] ?> </li>
                <li>Screen: <?php echo $row["screen_reso"].' | '. $row["screen_size"] . '" Inches | ' . $row["panel_type"] ?></li>
                <li>Processor: <?php echo $row["cpu_brand"].' '. $row["cpu_series"] . ' ' . $row["cpu_name"] . ' | Base Clock: ' . $row["cpu_speed"] ?> Ghz </li>
                <li>Graphics Card: <?php echo $row["gpu_type"].' | '. $row["gpu_brand"] . ' ' . $row["gpu_series"] . ' | VRAM: ' . $row["vram"] ?> MB </li>
                <li>RAM: <?php echo $row["ram_size"] .'GB DDR5 | '. $row["ram_speed"] ?> MHz</li>
                <li>Storage: <?php echo $row["storage_type"] .' | '. $row["storage_size"] ?> GB</li>
                <li>Weight: <?php echo $row["weight"] ?> KG</li>
            </ul>

            <div class = "icon-container">

                <div class = "icon-box">
                <i class="fa-solid fa-rotate-left"></i>
                <br>7 Day <br> Replacement
                </div>
                <div class = "icon-box">
                <i class="fa-solid fa-truck-ramp-box"></i>
                <br>Free <br> Delivery
                </div>
                <div class = "icon-box">
                <i class="fa-solid fa-calendar-check"></i>
                <br>Warranty <br> Policy
                </div>
                <div class = "icon-box">
                <i class="fa-solid fa-award"></i>
                <br>Top <br> Brand
                </div>

            </div>

        </div>
    </div>

    <div class="divider" style = "width: 100%;"></div><br>

    <div class="desc-grid-container">
        
        <div class="desc-grid-item">
            <ul class = "detail-spec-desc" style = "margin-left: 9.1vw; margin-right: 9.1vw;" >
                <?php foreach ($descText as $index => $descText) {
                    echo '<li>'. $descText . '</li> <br>';
                } ?>
            </ul>
        </div>

        <div class="divider" style = "width: 100%;"></div><br>

        <div class="desc-grid-item" style = "justify-items: center;">
            <?php foreach ($descLinks as $index => $descLinks) {
                echo '<img src="' . $descLinks . '" alt="" style = "max-width: 78.125vw; max-height: 77.47vh; margin-left: 9.1vw; margin-right: 9.1vw;">';
            } ?>

        </div>

    </div>

    <script src = "../js/carousel.js"> </script>

    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>

</body>
</html>