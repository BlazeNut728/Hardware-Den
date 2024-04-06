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
        <?php include('admin_navbar.php');?>
    </header>

    </div>
    <div class="panel-container">
        <div class = "sidebar">

            <a class = "sidebar-head-text">User Management</a>

            <div class = "divider"></div>

            <div  class = "sidebar-item">
                <i class="sidebar-item-text fa-solid fa-chalkboard"></i>
                <a class = "sidebar-item-text" href="#home">Panel Access</a>
            </div>
            <div  class = "sidebar-item">
                <i class="sidebar-item-text fa-solid fa-user"></i>
                <a class = "sidebar-item-text" href="#home">User Management</a>
            </div>
            <div  class = "sidebar-item">
                <i class="sidebar-item-text fa-solid fa-user-minus"></i>
                <a class = "sidebar-item-text" href="#home">Account Deletion</a>
            </div>

            <div class = "divider"></div>

        </div>

        <div class = "info-container">

            <div class = "grid-container">

                <div class = grid-item>
                    ID
                </div>
                <div class = grid-item>
                    Name
                </div>
                <div class = grid-item>
                    Username
                </div>
                <div class = grid-item>
                    Email
                </div>
                <div class = grid-item>
                    Phone No
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