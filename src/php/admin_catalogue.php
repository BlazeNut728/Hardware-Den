<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admin_panel.css">
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <title>Hardware Den</title>
</head>
<body>
    <?php
        include('data_conn.php');
        error_reporting(0);    
        session_start();

        if (isset($_COOKIE["user"])) {

            $cookie_user = $_COOKIE["user"];

            $sql = "SELECT * FROM `login_credential` where user = '$cookie_user' and admin = '1'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if($row["admin"] == 1) {


            }

            else{

                header("Location:customer_dashboard.php");
            }
        }
        else{

            header("Location:customer_login.php");
        }

    ?>

    <header>
        <?php

        include ('admin_navbar.php');
        ?>
    </header>

    <div id="CL" class="page">

        <div class="panel-container">
            <div class = "sidebar">

                <a class = "sidebar-head-text">Catalogue</a>

                <div class = "divider"></div>

                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-laptop"></i>
                    <a class = "sidebar-item-text" onclick="showSidebar('CL-L')" >Laptops</a>
                </div>
                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-desktop"></i>
                    <a class = "sidebar-item-text" onclick="showSidebar('CL-PC')">PC</a>
                </div>
                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-ethernet"></i>
                    <a class = "sidebar-item-text" onclick="showSidebar('CL-NC')">Network Cards</a>
                </div>

                <div class = "divider"></div>

            </div>

            <div class = "body-container">

                <div class = "info" id = "CL-L">

                <div class = "search-bar">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="text" name="search_term" class="search_box">
                        <input type="hidden" name="action" value="search">
                        <input type="submit" value="Search" class="search_button">
                    </form>
                </div>

                    <?php
                        include('data_conn.php');
                        
                        // Handle form submission for editing data
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {

                            if ($_POST["action"] == "edit") {
                            // Sanitize input
                            $id = sanitize_input($_POST["id"]);
                            $user = sanitize_input($_POST["user"]);
                            $name = sanitize_input($_POST["name"]);
                            $email = sanitize_input($_POST["email"]);
                            $phone_number = sanitize_input($_POST["phone_number"]);
                        
                            // SQL query to update data in the database
                            $sql = "UPDATE login_credential SET user = '$user', name='$name', email='$email', phone_number = '$phone_number'  WHERE id='$id'";
                        
                            if ($conn->query($sql) === TRUE) {
                            echo "Record updated successfully";
                            } else {
                            echo "Error updating record: " . $conn->error;
                            }
                            }

                            elseif ($_POST["action"] == "search") {
                                // Sanitize input
                                $search_term = sanitize_input($_POST["search_term"]);
                            
                                // SQL query to search for data in the database
                                $sql = "SELECT * FROM laptop WHERE manufacturer LIKE '%$search_term%' OR model_name LIKE '%$search_term%' OR category LIKE '%$search_term%' OR screen_size LIKE '%$search_term%' OR screen_reso LIKE '%$search_term%' OR panel_type LIKE '%$search_term%' OR cpu_brand LIKE '%$search_term%' OR cpu_series LIKE '%$search_term%' OR cpu_name LIKE '%$search_term%' OR cpu_speed LIKE '%$search_term%' OR gpu_type LIKE '%$search_term%' OR gpu_brand LIKE '%$search_term%' OR gpu_series LIKE '%$search_term%' OR vram LIKE '%$search_term%' OR ram_size LIKE '%$search_term%' OR ram_speed LIKE '%$search_term%' OR storage_type LIKE '%$search_term%' OR storage_size LIKE '%$search_term%' OR os LIKE '%$search_term%'";
                                $result = $conn->query($sql);
                            
                                if ($result->num_rows > 0) {
                                  echo "<table>";
                                  // Table header
                                  echo "<tr><th>ID</th><th>Manufacturer</th><th>Model Name</th><th>Category</th><th>Screen Size</th><th>Screen Resolution</th><th>Screen Type</th><th>CPU Brand</th><th>CPU Series</th><th>CPU Name</th><th>CPU Speed</th><th>GPU Type</th><th>GPU Brand</th><th>GPU Name</th><th>GPU VRAM</th><th>RAM Size [GB]</th><th>RAM Speed [Mhz]</th><th>Storage Type</th><th>Storage Size [GB]</th><th>OS</th><th>Weight [KG]</th><th>Price [Rs]</th><th>Release Year</th><th>Stock</th><th>Status</th></tr>";
                            
                                  // Output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["laptop_id"] . "</td><td contenteditable='true'>" . $row["manufacturer"] . "</td><td contenteditable='true'>" . $row["model_name"] . "</td><td contenteditable='true'>" . $row["category"] . "</td><td contenteditable='true'>" . $row["screen_size"] . "</td><td contenteditable='true'>". $row["screen_reso"] . "</td><td contenteditable='true'>". $row["panel_type"] . "</td><td contenteditable='true'>". $row["cpu_brand"] . "</td><td contenteditable='true'>". $row["cpu_series"] . "</td><td contenteditable='true'>". $row["cpu_name"] . "</td><td contenteditable='true'>". $row["cpu_speed"] . "</td><td contenteditable='true'>". $row["gpu_type"] . "</td><td contenteditable='true'>". $row["gpu_brand"] . "</td><td contenteditable='true'>". $row["gpu_series"] . "</td><td contenteditable='true'>". $row["vram"] . "</td><td contenteditable='true'>". $row["ram_size"] . "</td><td contenteditable='true'>". $row["ram_speed"] . "</td><td contenteditable='true'>". $row["storage_type"] . "</td><td contenteditable='true'>". $row["storage_size"] . "</td><td contenteditable='true'>". $row["os"] . "</td><td contenteditable='true'>". $row["weight"] . "</td><td contenteditable='true'>". $row["price"] . "</td><td contenteditable='true'>". $row["release_year"] . "</td><td contenteditable='true'>" . $row["stock"] . "</td><td><button class='edit-btn' onclick='editRow(" . $row["laptop_id"] . ")'>Save</button></td></tr>" ;
                                  }
                                  echo "</table>";
                                } else {
                                  echo "0 results";
                                }
                              }
                        }

                        else {

                            $sql = "SELECT * FROM laptop";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            echo "<table>";
                            // Table header
                            echo "<tr><th>ID</th><th>Manufacturer</th><th>Model Name</th><th>Category</th><th>Screen Size</th><th>Screen Resolution</th><th>Screen Type</th><th>CPU Brand</th><th>CPU Series</th><th>CPU Name</th><th>CPU Speed</th><th>GPU Type</th><th>GPU Brand</th><th>GPU Name</th><th>GPU VRAM</th><th>RAM Size [GB]</th><th>RAM Speed [Mhz]</th><th>Storage Type</th><th>Storage Size [GB]</th><th>OS</th><th>Weight [KG]</th><th>Price [Rs]</th><th>Release Year</th><th>Stock</th><th>Status</th></tr>";

                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["laptop_id"] . "</td><td contenteditable='true'>" . $row["manufacturer"] . "</td><td contenteditable='true'>" . $row["model_name"] . "</td><td contenteditable='true'>" . $row["category"] . "</td><td contenteditable='true'>" . $row["screen_size"] . "</td><td contenteditable='true'>". $row["screen_reso"] . "</td><td contenteditable='true'>". $row["panel_type"] . "</td><td contenteditable='true'>". $row["cpu_brand"] . "</td><td contenteditable='true'>". $row["cpu_series"] . "</td><td contenteditable='true'>". $row["cpu_name"] . "</td><td contenteditable='true'>". $row["cpu_speed"] . "</td><td contenteditable='true'>". $row["gpu_type"] . "</td><td contenteditable='true'>". $row["gpu_brand"] . "</td><td contenteditable='true'>". $row["gpu_series"] . "</td><td contenteditable='true'>". $row["vram"] . "</td><td contenteditable='true'>". $row["ram_size"] . "</td><td contenteditable='true'>". $row["ram_speed"] . "</td><td contenteditable='true'>". $row["storage_type"] . "</td><td contenteditable='true'>". $row["storage_size"] . "</td><td contenteditable='true'>". $row["os"] . "</td><td contenteditable='true'>". $row["weight"] . "</td><td contenteditable='true'>". $row["price"] . "</td><td contenteditable='true'>". $row["release_year"] . "</td><td contenteditable='true'>" . $row["stock"] . "</td><td><button class='edit-btn' onclick='editRow(" . $row["laptop_id"] . '", \"LPCL\") ")>Save</button></td></tr>"' ;
                            }
                            echo "</table>";
                            } else {
                            echo "0 results";
                            }
                        }

                    ?>
                </div>

            </div>
        </div>

    </div>
    

    <?php
        $pageName = "Admin_Catalogue";
    ?>
    <script>
        var pageName = "<?php echo $pageName; ?>";
    </script>
    <script src = "../js/redirect.js"></script>

</body>

<footer>
        <div class = "bl">
            <a class="hd5" >Created with ❤️ by BlazeNut</a>
        </div>
    </footer>