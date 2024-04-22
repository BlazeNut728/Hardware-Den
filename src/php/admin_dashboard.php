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
                    <a class = "sidebar-item-text" onclick="showSidebar('CL-L')" >A</a>
                </div>
                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-desktop"></i>
                    <a class = "sidebar-item-text" onclick="showSidebar('CL-PC')">B</a>
                </div>
                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-ethernet"></i>
                    <a class = "sidebar-item-text" onclick="showSidebar('CL-NC')">C</a>
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

                   
                </div>

            </div>
        </div>

    </div>
    

    <?php
        $pageName = "Admin_Panel";
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