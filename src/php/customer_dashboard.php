<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/customer_dashboard.css">
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <title>Hardware Den</title>
</head>
<?php
include('data_conn.php');
session_start();

if (isset($_COOKIE["user"])) {

    $cookie_user = $_COOKIE["user"];

    $sql = "SELECT * FROM `login_credential` where user = '$cookie_user'";
    $r1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($r1, MYSQLI_ASSOC);

    $email = $row["email"];
    $name  = $row["name"];
    $ba = $row["billing_address"];
    $sa = $row["shipping_address"];
    $msg = '';
    $status = '';
    $id = $row["id"];


    if (empty($ba)) {

        $ba = "You have not set a billing address";
    }

    if (empty($sa)) {

        $sa = "You have not set a shipping address";
    }

    $newsletter = "SELECT status FROM `newsletter` where email = '$email'";
    $r2 = mysqli_query($conn, $newsletter);
    $nw = mysqli_fetch_array($r2, MYSQLI_ASSOC);
    $nw_status = $nw["status"];

    if ($nw_status == '1') {

        $status = "You Have Subscribed to Our Newsletter";
    } else {

        $status = "You Have Not Subscribed to Our Newsletter";
    }

    if (isset($_POST['cd-checkbox'])) {
        $nw_change = $_POST["cd-checkbox"];

        if ($nw_change == 'Yes') {

            if ($nw_status == '1') {

                $nw_statuschange = "UPDATE `newsletter` SET status ='0' WHERE email = '$email'";
                $nw_update = mysqli_query($conn, $nw_statuschange);
                header ('Location: customer_dashboard.php');
            } if ($nw_status == '0') {

                $nw_statuschange = "UPDATE `newsletter` SET status ='1' WHERE email = '$email'";
                $nw_update = mysqli_query($conn, $nw_statuschange);
                header ('Location: customer_dashboard.php');
            }
        }
    }

    if (isset($_POST['cd-pass'])) {
        $pass = $_POST["cd-pass"];
        $np_pass = $_POST["np-pass"];
        $cnp_pass = $_POST["cnp-pass"];

        if ($pass == $row["pass"] && $np_pass != $row["pass"] && $np_pass == $cnp_pass) {

            $changepass = "UPDATE `login_credential` SET pass ='$np_pass' WHERE id = '$id'";
            $pass_update = mysqli_query($conn, $changepass);
            header ('Location: customer_dashboard.php');
        } else if ($pass != $row["pass"] && $np_pass == $cnp_pass) {

            $msg = "Incorrect Password";
        } else if ($np_pass == $row["pass"]) {

            $msg = "Old Password & New Password Cannot Be Same";
        } else {

            $msg = "New Password & Confirmed Password do not match";
        }
    }

    if (isset($_POST['cd-user']) or isset($_POST['cd-name']) or isset($_POST['cd-email']) or isset($_POST['cd-number'])) {

        $cd_user = $_POST["cd-user"];
        $cd_name = $_POST["cd-name"];
        $cd_email = $_POST["cd-email"];
        $cd_number = $_POST["cd-number"];

        $cd_user = mysqli_real_escape_string($conn, $cd_user);
        $cd_name = mysqli_real_escape_string($conn, $cd_name);
        $cd_email = mysqli_real_escape_string($conn, $cd_email);
        $cd_number = mysqli_real_escape_string($conn, $cd_number);

        if(!empty($cd_user)) {

            $changedetail = "UPDATE `login_credential` SET user ='$cd_user' WHERE id = '$id'";
            $cd_update = mysqli_query($conn, $changedetail);
            $cookie_name = "user";
            $cookie_value = $row["user"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            header ('Location: customer_login.php');
        }
        if(!empty($cd_name)) {

            $changedetail = "UPDATE `login_credential` SET name = '$cd_name' WHERE id = '$id'";
            $cd_update = mysqli_query($conn, $changedetail);
            header ('Location: customer_dashboard.php');
        }
        if(!empty($cd_email)) {

            $changedetail = "UPDATE `login_credential` SET email ='$cd_email' WHERE id = '$id'";
            $cd_update = mysqli_query($conn, $changedetail);
            header ('Location: customer_dashboard.php');
        }
        if(!empty($cd_number)) {

            $changedetail = "UPDATE `login_credential` SET phone_number ='$cd_number' WHERE id = '$id'";
            $cd_update = mysqli_query($conn, $changedetail);
            header ('Location: customer_dashboard.php');
        }
    } 

    if (isset($_POST['cd-ba'])) {

        $cd_ba = $_POST["cd-ba"];

        $changedetail = "UPDATE `login_credential` SET billing_address ='$cd_ba' WHERE id = '$id'";
        $cd_update = mysqli_query($conn, $changedetail);
        header ('Location: customer_dashboard.php');

    }
    if (isset($_POST['cd-sa'])) {

        $cd_sa = $_POST["cd-sa"];

        $changedetail = "UPDATE `login_credential` SET shipping_address ='$cd_sa' WHERE id = '$id'";
        $cd_update = mysqli_query($conn, $changedetail);
        header ('Location: customer_dashboard.php');

    }

    if (isset($_POST['cd-logout'])) {

        echo 'TEST' ;

            unset($_COOKIE['user']); 
            setcookie('user', '', -1, '/');
            header ('Location: customer_login.php');
    }

}

else {
    echo 'User is not set';
    header ('Location: customer_login.php');
}
?>

<body>
    <?php include('navbar.php'); ?>

    <div class="ar">
        <a class="hm" href="#home">Home</a> <a style="color:#ff8400;"> > </a> <a class="lg" href="customer_dashboard.php">My Dashboard</a>
    </div>

    <div class="ar">
        <a class="stc"> <?php echo $name; ?>'s Dashboard </a> <br><br>
    </div>

    <div class="cd-gc">

        <div class="cd-sidebar"><br><br>

            <a class="sidebar-item" href="#AD"> Account Dashboard </a><br><br>
            <a class="sidebar-item" href="#AI"> Account Infomation </a><br><br>
            <a class="sidebar-item" href="#AB"> Address Book </a><br><br>
            <a class="sidebar-item" href="#MO"> My Orders </a><br>

            <div class="divider"></div><br>

            <a class="sidebar-item" href="#AD"> My Downloadable Products </a><br><br>
            <a class="sidebar-item" href="#AI"> Stored Payment Methods </a><br><br>
            <a class="sidebar-item" href="#AB"> Billing Agreements </a><br><br>
            <a class="sidebar-item" href="#MO"> My Wishlist </a><br>

            <div class="divider"></div><br>

            <a class="sidebar-item" href="#AB"> My Product Reviews </a><br><br>
            <a class="sidebar-item" href="#NW-Modal"> Newsletter Subscription </a><br><br>
            <button class="sidebar-item" id="cd-logout" name="cd-logout" > Logout </button><br>
        </div>

        <div class="cd-gi" style="width: 100%; height: 25.0vh;">
            <a class="cd-head">Account Information</a>
            <div class="cd-divider"></div>
            <div class="ai-gc">
                <div class="ai-ci">
                    <a class="ci-head"> Contact Information </a><br><br>

                    <a id="ai-name" class="ci-info">
                        <?php echo $row["name"]; ?></a>
                    </a><br>

                    <a id="ai-email" class="ci-info">
                        <?php echo $row["email"]; ?></a><br>
                    </a><br><br>

                    <button id="ai-edit" href="#Edit-Modal" class="ci-edit">Edit Info</button>
                    <button id="ai-cp" href="#Password-Modal" class="ci-edit">Change Password</button>
                </div>
                <div class="ai-nl">
                    <a class="ci-head"> Newsletter </a><br><br>
                    <a id="ai-status" class="ci-info">
                        <?php echo $status; ?></a><br>
                    </a><br><br><br>
                    <button id="ai-nwedit" href="#NW-Modal" class="ci-edit">Edit</button>
                </div>
            </div>
        </div>
        <div class="cd-gi"></div>
        <div class="cd-gi" style="width: 100%; height: 25.0vh; word-break: break-all;">
            <a class="cd-head">Address Book</a>
            <div class="cd-divider"></div>
            <div class="ai-gc">
                <div class="ai-ci">
                    <a class="ci-head"> Default Billing Address </a><br><br>

                    <a id="ai-name" class="ci-info">
                        <?php echo $ba; ?></a>
                    </a><br><br><br>

                    <button id="ai-baedit" href="#BA-Modal" class="ci-edit">Edit</button>
                </div>
                <div class="ai-nl">
                    <a class="ci-head"> Default Shipping Address </a><br><br>
                    <a id="ai-status" class="ci-info">
                        <?php echo $sa; ?></a><br>
                    </a><br><br>
                    <button id="ai-saedit" href="#SA-Modal" class="ci-edit">Edit</button>
                </div>
            </div>
        </div>
    </div>

    <div id="Edit-Modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" style="position: fixed; top: 3%; right: 3%; font-size: 1.2vh; font-weight: 600; color: white; border-radius: 100%; border: 0.1vh solid #f75a5a; background-color: #f75a5a; color: #f75a5a;">X</button>
            </div>
            <div class="modal-body">
                <br>
                <form action="customer_dashboard.php" method="POST">
                    <a class="cd-text">Username:</a><br>
                    <input type="text" id="cd-user" name="cd-user" class="cd-pass" placeholder="<?php echo $row["user"]; ?>" autocomplete="off"><br>

                    <label class="cd-text">Customer Name:</label><br>
                    <input type="text" id="cd-name" name="cd-name" class="cd-pass" placeholder="<?php echo $row["name"]; ?>" autocomplete="off"><br>

                    <label class="cd-text">Email:</label><br>
                    <input type="email" id="cd-email" name="cd-email" class="cd-pass" placeholder="<?php echo $row["email"]; ?>" autocomplete="off"><br>

                    <label class="cd-text">Phone Number:</label><br>
                    <input type="number" id="cd-number" name="cd-number" class="cd-pass" placeholder="<?php echo $row["phone_number"]; ?>" autocomplete="off"><br><br>

                    <button id="modal-submit" class="modal-submit">Save Changes</button><br>
                    <a class="cl-em"><?php echo $msg; ?></a>
                </form>
                <br>
            </div>
        </div>
    </div>

    <div id="Password-Modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" style="position: fixed; top: 3%; right: 3%; font-size: 1.2vh; font-weight: 600; color: white; border-radius: 100%; border: 0.1vh solid #f75a5a; background-color: #f75a5a; color: #f75a5a;">X</button>
            </div>
            <div class="modal-body">
                <br>
                <form action="customer_dashboard.php" method="POST">
                    <a class="cd-text">Current Password:</a><br>
                    <input type="password" id="cd-pass" name="cd-pass" class="cd-pass" autocomplete="off" required><br>

                    <label class="cd-text">New Password:</label><br>
                    <input type="text" id="np-pass" name="np-pass" class="cd-pass" autocomplete="off" required><br>

                    <label class="cd-text">Confirm New Password:</label><br>
                    <input type="text" id="cnp-pass" name="cnp-pass" class="cd-pass" autocomplete="off" required><br><br>

                    <button id="modal-submit" class="modal-submit">Save Changes</button><br>
                    <a class="cl-em"><?php echo $msg; ?></a>
                </form>
                <br>
            </div>
        </div>
    </div>

    <div id="NW-Modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" style="position: fixed; top: 3%; right: 3%; font-size: 1.2vh; font-weight: 600; color: white; border-radius: 100%; border: 0.1vh solid #f75a5a; background-color: #f75a5a; color: #f75a5a;">X</button>
            </div>
            <div class="modal-body">
                <br>
                <a class="cd-text"><?php echo $status; ?></a><br>
                <a class="cd-text">Would You Like to Change That ?</a><br><br>
                <form action="customer_dashboard.php" method="POST">
                    <div class="cd-checkbox-container">
                        <div class="round">
                            <input type="checkbox" id="cd-checkbox" name = "cd-checkbox" value="Yes" />
                            <label for="cd-checkbox"></label>
                        </div>
                    </div>
                    <br><br>
                    <button id="modal-submit" class="modal-submit">Save Changes</button><br>
                </form>
                <br>
            </div>
        </div>
    </div>

    <div id="BA-Modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" style="position: fixed; top: 3%; right: 3%; font-size: 1.2vh; font-weight: 600; color: white; border-radius: 100%; border: 0.1vh solid #f75a5a; background-color: #f75a5a; color: #f75a5a;">X</button>
            </div>
            <div class="modal-body">
                <br>

                <form action="customer_dashboard.php" method="POST">
                    <a class="cd-text">Billing Address:</a><br>
                    <input type="text" id="cd-ba" name="cd-ba" class="cd-pass" autocomplete="off" required><br>
                    <button id="modal-submit" class="modal-submit">Save Changes</button><br>
                    <a class="cl-em"><?php echo $msg; ?></a>
                </form>

                <br>
            </div>
        </div>
    </div>

    <div id="SA-Modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" style="position: fixed; top: 3%; right: 3%; font-size: 1.2vh; font-weight: 600; color: white; border-radius: 100%; border: 0.1vh solid #f75a5a; background-color: #f75a5a; color: #f75a5a;">X</button>
            </div>
            <div class="modal-body">
                <br>

                <form action="customer_dashboard.php" method="POST">
                    <a class="cd-text">Shipping Address:</a><br>
                    <input type="text" id="cd-sa" name="cd-sa" class="cd-pass" autocomplete="off" required><br>
                    <button id="modal-submit" class="modal-submit">Save Changes</button><br>
                    <a class="cl-em"><?php echo $msg; ?></a>
                </form>

                <br>
            </div>
        </div>
    </div>

    <script src="../js/modal.js"></script>

    <footer>
        <br><br>
        <?php include('footer.php'); ?>
    </footer>
</body>

</html>