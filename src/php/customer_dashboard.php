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

        if( isset($_COOKIE["user"])) {

            $cookie_user = $_COOKIE["user"];
            
            $sql = "SELECT * FROM `login_credential` where user = '$cookie_user'";
            $r1 = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($r1, MYSQLI_ASSOC); 

            $email = $row["email"];
            $name  = $row["name"];
            $ba = $row["billing_address"];
            $sa = $row["shipping_address"];
            $msg = '';
            $id = $row["id"];

            if(empty($ba)) {

                $ba = "You have not set a billing address";

            }

            if(empty($sa)) {

                $sa = "You have not set a shipping address";

            }

            $newsletter = "SELECT status FROM `newsletter` where email = '$email'";
            $r2 = mysqli_query($conn, $newsletter); 
            $nw = mysqli_fetch_array($r2, MYSQLI_ASSOC); 

            if  ($nw == true){

                $status = "You Have Subscribed to Our Newsletter";
            }
            else {

                $status = "You Have Not Subscribed to Our Newsletter";
            }

            if (isset($_POST['cd-pass'])) {
                $pass = $_POST["cd-pass"];  
                $np_pass = $_POST["np-pass"];
                $cnp_pass = $_POST["cnp-pass"];    

                if($pass == $row["pass"] && $np_pass!= $row["pass"] && $np_pass ==$cnp_pass){

                    $changepass = "UPDATE `login_credential` SET pass ='$np_pass' WHERE id = '$id'"; 
                    $pass_update = mysqli_query($conn, $changepass);   

                }
                else if($pass != $row["pass"] && $np_pass == $cnp_pass){

                    $msg = "Incorrect Password";

                }
                else if($np_pass == $row["pass"]){

                    $msg = "Old Password & New Password Cannot Be Same";
                }
                else {

                    $msg = "New Password & Confirmed Password do not match";
                }
            }

            if (isset($_POST['cd-user'])) {
                $cd_user = $_POST["cd-user"];  
                $cd_name = $_POST["cd-name"];
                $cd_email = $_POST["cd-email"];
                $cd_number = $_POST["cd-number"];   

                if(empty($cd_user)){

                    $changedetail = "UPDATE `login_credential` SET name ='$cd_name', email ='$cd_email', phone_number ='$cd_number'  WHERE id = '$id'"; 
                    $pass_update = mysqli_query($conn, $changedetail);   

                }
                else if(empty($cd_name)){

                    $changedetail = "UPDATE `login_credential` SET user ='$cd_user', email ='$cd_email', phone_number ='$cd_number'  WHERE id = '$id'"; 
                    $pass_update = mysqli_query($conn, $changedetail);   

                }
                else if(empty($cd_email)){

                    $changedetail = "UPDATE `login_credential` SET user ='$cd_user', name ='$cd_name', phone_number ='$cd_number'  WHERE id = '$id'"; 
                    $pass_update = mysqli_query($conn, $changedetail);   

                }
                else if(empty($cd_number)){

                    $changedetail = "UPDATE `login_credential` SET user ='$cd_user', name ='$cd_name', email ='$cd_email' WHERE id = '$id'"; 
                    $pass_update = mysqli_query($conn, $changedetail);   

                }
                else {

                    $msg = "";
                }
            }
        }
        else {
            echo 'User is not set';
        }
    ?>   
<body>
        <?php include('navbar.php'); session_start();?>

    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="customer_dashboard.php">My Dashboard</a>
    </div>

    <div class= "ar">
        <a class="stc"> <?php echo $name; ?>'s Dashboard </a> <br><br>
    </div>

    <div class = "cd-gc" >

        <div class = "cd-sidebar"><br><br>
            
            <a class = "sidebar-item" href = "#AD"> Account Dashboard </a><br><br>
            <a class = "sidebar-item" href = "#AI"> Account Infomation </a><br><br>
            <a class = "sidebar-item" href = "#AB"> Address Book </a><br><br>
            <a class = "sidebar-item" href = "#MO"> My Orders </a><br>

            <div class  = "divider"></div><br>

            <a class = "sidebar-item" href = "#AD"> My Downloadable Products </a><br><br>
            <a class = "sidebar-item" href = "#AI"> Stored Payment Methods </a><br><br>
            <a class = "sidebar-item" href = "#AB"> Billing Agreements </a><br><br>
            <a class = "sidebar-item" href = "#MO"> My Wishlist </a><br>

            <div class  = "divider"></div><br>

            <a class = "sidebar-item" href = "#AB"> My Product Reviews </a><br><br>
            <a class = "sidebar-item" href = "#MO"> Newsletter Subscription </a><br><br>
            <button class = "sidebar-item" href = "#MO"> Logout </button><br>
        </div>

        <div class="cd-gi" style = "height: 25.0vh;">
            <a class = "cd-head" >Account Information</a>
            <div class  = "cd-divider"></div>
            <div class = "ai-gc">
                <div class = "ai-ci">
                    <a class = "ci-head"> Contact Information </a><br><br>

                    <a id = "ai-name" class = "ci-info">
                        <?php echo $row["name"]; ?></a>
                    </a><br>

                    <a id = "ai-email" class = "ci-info">
                        <?php echo $row["email"]; ?></a><br>
                    </a><br><br>

                    <button id = "ai-edit" class = "ci-edit" onclick="Edit()">Edit</button>
                    <button id = "ai-cp" class = "ci-edit" onclick="ChangePassword()">Change Password</button>
                </div>
                <div class = "ai-nl">
                    <a class = "ci-head"> Newsletter </a><br><br>
                    <a id = "ai-status" class = "ci-info">
                        <?php echo $status; ?></a><br>
                    </a><br><br><br>
                    <button id = "ai-nwedit" class = "ci-edit" onclick="NewsletterEdit()">Edit</button>
                </div>
            </div>
        </div>
        <div class="cd-gi"></div>
        <div class="cd-gi" style = "height: 25.0vh;">
            <a class = "cd-head" >Address Book</a>
            <div class  = "cd-divider"></div>
            <div class = "ai-gc">
                <div class = "ai-ci">
                    <a class = "ci-head"> Default Billing Address </a><br><br>

                    <a id = "ai-name" class = "ci-info">
                        <?php echo $ba; ?></a>
                    </a><br><br><br>

                    <a id = "ba-edit" class = "ci-edit" onclick="EditBillingAddress()">Edit Address</a>
                </div>
                <div class = "ai-nl">
                    <a class = "ci-head"> Default Shipping Address </a><br><br>
                    <a id = "ai-status" class = "ci-info">
                        <?php echo $sa; ?></a><br>
                    </a><br><br>
                    <a id = "sa-edit" class = "ci-edit" onclick="EditBillingAddress()">Edit Address</a>
                </div>
            </div>
        </div>
    </div>

    <div id="Password-Modal" class="Modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" style = "position: fixed; top: 3%; right: 3%; font-size: 1.2vh; font-weight: 600; color: white; border-radius: 100%; border: 0.1vh solid #f75a5a; background-color: #f75a5a; color: #f75a5a;">X</button>
            </div>
            <div class="modal-body">
                <br>
                <form action="customer_dashboard.php"  method="POST">
                    <a class = "cd-text" >Current Password:</a><br>
                    <input type="password" id="cd-pass" name="cd-pass" class = "cd-pass" autocomplete = "off" required><br>

                    <label class = "cd-text" >New Password:</label><br>
                    <input type="text" id="np-pass" name="np-pass" class = "cd-pass" autocomplete = "off" required><br>

                    <label class = "cd-text" >Confirm New Password:</label><br>
                    <input type="text" id="cnp-pass" name="cnp-pass" class = "cd-pass" autocomplete = "off" required><br><br>

                    <button id = "modal-submit" class = "modal-submit">Save Changes</button><br>
                    <a class = "cl-em"><?php echo $msg; ?></a>
                </form>
                <br>
            </div>
        </div>
    </div>

    <div id="Edit-Modal" class="Modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" style = "position: fixed; top: 3%; right: 3%; font-size: 1.2vh; font-weight: 600; color: white; border-radius: 100%; border: 0.1vh solid #f75a5a; background-color: #f75a5a; color: #f75a5a;">X</button>
            </div>
            <div class="modal-body">
                <br>
                <form action="customer_dashboard.php"  method="POST">
                    <a class = "cd-text" >Username:</a><br>
                    <input type="text" id="cd-user" name="cd-user" class = "cd-pass" placeholder="" autocomplete = "off" required><br>

                    <label class = "cd-text" >Customer Name:</label><br>
                    <input type="text" id="cd-name" name="cd-name" class = "cd-pass" placeholder="" autocomplete = "off" required><br>

                    <label class = "cd-text" >Email:</label><br>
                    <input type="email" id="cd-email" name="cd-email" class = "cd-pass" placeholder="" autocomplete = "off" required><br>

                    <label class = "cd-text" >Phone Number:</label><br>
                    <input type="number" id="cd-number" name="cd-number" class = "cd-pass" placeholder="" autocomplete = "off" required><br><br>

                    <button id = "modal-submit" class = "modal-submit">Save Changes</button><br>
                    <a class = "cl-em"><?php echo $msg; ?></a>
                </form>
                <br>
            </div>
        </div>
    </div>

    <script src="../js/modal.js"></script>
    
    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>
</body>
</html>