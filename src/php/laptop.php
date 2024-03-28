<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/laptop.css">
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <title>Hardware Den</title>
</head>
<body>
    <header>
        <?php include('navbar.php');?>
    </header>

    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="laptop.php">Laptops</a>
    </div>
    
    <br>

    <div class = "grid-wrapper">
        <div class = filter-container>


            <div class = "filter">

                <a class ="filter-heading">Sort By Category</a>

                <?php
                include('data_conn.php');
                $sql = "SELECT DISTINCT (category) FROM laptop ORDER BY category DESC ";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                foreach($result as $row)
                {
                ?>

                <div class = "filter-checkbox">
                    <label>
                        <div class="checkbox-wrapper-2">
                            <input type = "checkbox" class = "common_selector category" value = "<?php echo $row['category']; ?>" id = "category">
                            <?php echo $row['category']; ?>
                        </div>
                    </label>
                </div>

                <?php 
                }
                ?>

            </div>

            <div class="divider"></div><br>

            <div class = "filter">

                <a class ="filter-heading">Sort By Brand</a>

                <?php
                include('data_conn.php');
                $sql = "SELECT DISTINCT (manufacturer) FROM laptop ORDER BY manufacturer ASC ";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                foreach($result as $row)
                {
                ?>

                <div class = "filter-checkbox">
                    <label>
                        <div class="checkbox-wrapper-2">
                            <input type = "checkbox" class = "common_selector manufacturer" value = "<?php echo $row['manufacturer']; ?>" id = "manufacturer">
                            <?php echo $row['manufacturer']; ?>
                        </div>
                    </label>
                </div>

                <?php 
                }
                ?>

            </div>

            <div class="divider"></div><br>

            <div class = "filter">

                <a class ="filter-heading">Sort By CPU</a>

                <?php
                include('data_conn.php');
                $sql = "SELECT DISTINCT (cpu_brand) FROM laptop ORDER BY cpu_brand ASC ";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                foreach($result as $row)
                {
                ?>

                <div class = "filter-checkbox">
                    <label>
                        <div class="checkbox-wrapper-2">
                            <input type = "checkbox" class = "common_selector cpu_brand" value = "<?php echo $row['cpu_brand']; ?>" id = "cpu_brand">
                            <?php echo $row['cpu_brand']; ?>
                        </div>
                    </label>
                </div>

                <?php 
                }
                ?>

            </div>

            <div class="divider"></div><br>

            <div class = "filter">

                <a class ="filter-heading">Sort By RAM Size</a>

                <?php
                include('data_conn.php');
                $sql = "SELECT DISTINCT (ram_size) FROM laptop ORDER BY ram_size ASC ";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                foreach($result as $row)
                {
                ?>

                <div class = "filter-checkbox">
                    <label>
                        <div class="checkbox-wrapper-2">
                            <input type = "checkbox" class = "common_selector ram_size" value = "<?php echo $row['ram_size']; ?>" id = "ram_size">
                            <?php echo $row['ram_size']; ?> GB
                        </div>
                    </label>
                </div>

                <?php 
                }
                ?>

            </div>

            <div class="divider"></div><br>

            <div class = "filter">

                <a class ="filter-heading">Sort By Storage Size</a>

                <?php
                include('data_conn.php');
                $sql = "SELECT DISTINCT (storage_size) FROM laptop ORDER BY storage_size ASC ";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                foreach($result as $row)
                {
                ?>

                <div class = "filter-checkbox">
                    <label>
                        <div class="checkbox-wrapper-2">
                            <input type = "checkbox" class = "common_selector storage_size" value = "<?php echo $row['storage_size']; ?>" id = "storage_size">
                            <?php echo $row['storage_size']; ?> GB
                        </div>
                    </label>
                </div>

                <?php 
                }
                ?>

            </div>
            
        </div>

        

        <div class = "laptop-item" id = "result">

        </div>

    </div>
    <script src = "../js/filter.js"></script>
    <script src = "../js/redirect.js"></script>

    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>

</body>
</html>