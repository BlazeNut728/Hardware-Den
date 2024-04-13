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
        <div class="topnav">
            <div class = "logo-container">
                <a class="logo"><b>Hardware Den</b></a>
            </div>

            <img class = "nav-slash" src = "https://cdn.discordapp.com/attachments/1196163965110202440/1224785446211420191/Backslash-Symbol-Transparent.png?ex=6627fbd5&is=661586d5&hm=b6489cf9fd3249637e9411c42ebb1d03ac11a973b6e8ca088625f783c0db49f4&"></img>

            <div class = "menu-container">
            
                <a class="df" onclick="showPage('DB')">Dashboard</a>
                <a class="df" onclick="showPage('UM')">User Management</a>
                <a class="df" onclick="showPage('CL')">Catalogue</a>
                <a class="df" onclick="showPage('NL')">Newsletter</a>
                <a class="df" onclick="showPage('CQ')">Customer Queries</a>
                <a class="df" onclick="showPage('SM')">Stock Management</a>
                <a class="df" onclick="showPage('SD')">Staff Details</a>
                <a class="od card-link" href="#OD">Logout</a>
            </div>
        </div>
    </header>

    <div id="UM" class="page">

        <div class="panel-container">
            <div class = "sidebar">

                <a class = "sidebar-head-text">User Management</a>

                <div class = "divider"></div>

                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-chalkboard"></i>
                    <a class = "sidebar-item-text" onclick="showSidebar('UM-PA')" >Panel Access</a>
                </div>
                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-user"></i>
                    <a class = "sidebar-item-text" onclick="showSidebar('UM-UM')">User Management</a>
                </div>
                <div  class = "sidebar-item">
                    <i class="sidebar-item-text fa-solid fa-user-minus"></i>
                    <a class = "sidebar-item-text" onclick="showSidebar('UM-AB')">Account Blocking</a>
                </div>

                <div class = "divider"></div>

            </div>

            <div>

                <div class = "info" id = "UM-UM">

                <div class = "search-bar">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="text" name="search_term">
                    <input type="submit" value="Search">
                    </form>
                </div>

                    <?php
                        include('data_conn.php');
                        function sanitize_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                        
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
                                $sql = "SELECT * FROM login_credential WHERE user LIKE '%$search_term%' OR name LIKE '%$search_term%' OR email LIKE '%$search_term%' OR phone_number LIKE '%$search_term%'";
                                $result = $conn->query($sql);
                            
                                if ($result->num_rows > 0) {
                                  echo "<table>";
                                  // Table header
                                  echo "<tr><th>ID</th><th>Username</th><th>Name</th><th>Email</th><th>Phone No</th><th>Status</th></tr>";
                            
                                  // Output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["id"] . "</td><td contenteditable='true'>" . $row["user"] . "</td><td contenteditable='true'>" . $row["name"] . "</td><td contenteditable='true'>" . $row["email"] . "</td><td contenteditable='true'>" . $row["phone_number"] . "</td><td><button class='edit-btn' onclick='editRow(" . $row["id"] . ")'>Save</button></td></tr>" ;
                                  }
                                  echo "</table>";
                                } else {
                                  echo "0 results";
                                }
                              }
                        }

                        else {

                            $sql = "SELECT * FROM login_credential";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            echo "<table>";
                            // Table header
                            echo "<tr><th>ID</th><th>Username</th><th>Name</th><th>Email</th><th>Phone No</th><th>Status</th></tr>";

                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["id"] . "</td><td contenteditable='true'>" . $row["user"] . "</td><td contenteditable='true'>" . $row["name"] . "</td><td contenteditable='true'>" . $row["email"] . "</td><td contenteditable='true'>" . $row["phone_number"] . "</td><td><button class='edit-btn' onclick='editRow(" . $row["id"] . ")'>Save</button></td></tr>" ;
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
        $pageName = "Admin_Panel";
    ?>
    <script>
        var pageName = "<?php echo $pageName; ?>";
    </script>
    <script src = "../js/redirect.js"></script>
    <script src = "../js/page.js"></script>

</body>