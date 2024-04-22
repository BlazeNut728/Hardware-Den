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

                $base_sql = "SELECT * FROM `login_credential`";

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

    <div id="UM" class="page">

        <div class="panel-container">
            <div class = "sidebar">

                <a class = "sidebar-head-text">User Management</a>

                <div class = "divider"></div>

                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-chalkboard"></i>
                    <a class = "sidebar-item-text" onclick="openPanel('UM-PA')" >Panel Access</a>
                </div>
                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-user"></i>
                    <a class = "sidebar-item-text" onclick="openPanel('UM-UM')">User Management</a>
                </div>
                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-user-minus"></i>
                    <a class = "sidebar-item-text" onclick="openPanel('UM-AB')">Account Blocking</a>
                </div>

                <div class = "divider"></div>

            </div>

            <div class = "body-container">

                <div class = "info" id = "UM-UM">

                    <div class="search-bar">
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                            <input type="text" name="search_term" class="search_box">
                            <input type="hidden" name="action" value="search">
                            <input type="submit" value="Search" class="search_button">
                        </form>
                    </div>

                    <?php
                        include('data_conn.php');

                        if(isset($_POST['search_term']))
                        {

                            $search_query = $_POST['search_term'];
                            $sql = "$base_sql AND (WHERE user LIKE '%$search_query%' OR name LIKE '%$search_query%' OR email LIKE '%$search_query%' OR phone_number LIKE '%$search_query%')";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo '<div style="font-family: Poppins, sans-serif; font-size: 1.6vw; font-style: normal; font-weight: 600; color:#ff8400; ">Search Results:</div><br>';

                                echo "<table>";
                                
                                echo "<tr><th>ID</th><th>Username</th><th>Name</th><th>Email</th><th>Phone No</th><th>Status</th></tr>";
                        
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td contenteditable='true' id='username_" . $row['id'] . "'>" . $row['user'] . "</td>";
                                    echo "<td contenteditable='true' id='name_" . $row['id'] . "'>" . $row['name'] . "</td>";
                                    echo "<td contenteditable='true' id='email_" . $row['id'] . "'>" . $row['email'] . "</td>";
                                    echo "<td contenteditable='true' id='number_" . $row['id'] . "'>" . $row['phone_number'] . "</td>";
                                    echo '<td><button class ="save-btn" onclick="saveData(' . $row['id'] . ', \"UM\")">Save</button></td>';
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
                            else {
                                echo '<div style="font-family: Poppins, sans-serif; font-size: 2.0vw; font-style: normal; font-weight: 600; color:#ff8400; ">No Results Found</div>';
                            }

                        }
                        else {

                            $sql = $base_sql;
                            $result = $conn->query($sql);
                        
                            if ($result->num_rows > 0) {
                                echo "<table>";
                                // Table header
                                echo "<tr><th>ID</th><th>Username</th><th>Name</th><th>Email</th><th>Phone No</th><th>Status</th></tr>";
                        
                                // Output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td contenteditable='true' id='username_" . $row['id'] . "'>" . $row['user'] . "</td>";
                                    echo "<td contenteditable='true' id='name_" . $row['id'] . "'>" . $row['name'] . "</td>";
                                    echo "<td contenteditable='true' id='email_" . $row['id'] . "'>" . $row['email'] . "</td>";
                                    echo "<td contenteditable='true' id='number_" . $row['id'] . "'>" . $row['phone_number'] . "</td>";
                                    echo "<td><button onclick='saveData(" . $row['id'] . ", \"UM\")'>Save</button></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 results";
                            }
                        }
                    ?>
                </div>

                <div class="info" id="UM-PA">

                <?php
                include('data_conn.php');

                    $sql = "$base_sql WHERE admin_status = '1'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table>";
                        // Table header
                        echo "<tr><th>ID</th><th>Username</th><th>Name</th><th>Email</th><th>Phone No</th><th>Status</th></tr>";

                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td contenteditable='true' id='username_" . $row['id'] . "'>" . $row['user'] . "</td>";
                            echo "<td contenteditable='true' id='name_" . $row['id'] . "'>" . $row['name'] . "</td>";
                            echo "<td contenteditable='true' id='email_" . $row['id'] . "'>" . $row['email'] . "</td>";
                            echo "<td contenteditable='true' id='number_" . $row['id'] . "'>" . $row['phone_number'] . "</td>";
                            echo "<td><button onclick='saveData(" . $row['id'] . ", \"UM\")'>Save</button></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                ?>
            </div>


                <div class = "info" id = "UM-AB">
                    
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
    <script src = "../js/panel.js"></script>
    <script src="../js/save_data.js"></script>

</body>