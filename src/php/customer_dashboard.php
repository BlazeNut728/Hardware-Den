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
<body>
        <?php include('navbar.php');?>

    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="customer_dashboard.php">My Dashboard</a>
    </div>

    <div class= "ar">
        <a class="stc"> My Dashboard </a> <br><br>
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
            <a class = "sidebar-item" href = "#MO"> Newsletter Subscription </a><br>
        </div>

        <div class="cd-gi">
            <a class = "cd-head" >Account Information</a>
            <div class  = "divider"></div>
            <div class = "ai-gc">
                <div class = "ai-ci">
                    <a class = "ci-head"> Contact Information </a><br><br>

                    <a id = "ai-name" class = "ci-info">

                        <?php
                             include('data_conn.php');
                             $msg = '';
                             $id = session_id();
                             if (isset($_POST['cl-email'])) {
                             $email = $_POST["cl-email"];  
                             $password = $_POST["cl-pass"];  
                             
                                 //to prevent from mysqli injection  
                                 $username = stripcslashes($email);  
                                 $password = stripcslashes($password);  
                                 $username = mysqli_real_escape_string($conn, $email);  
                                 $password = mysqli_real_escape_string($conn, $password);  
                             
                                 $sql = "SELECT * FROM `login_credential` where name = '$email' and pass = '$password'";
                                 $result = mysqli_query($conn, $sql);  
                                 $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
                                 $count = mysqli_num_rows($result);  
                                 
                                 if($count == 1){  
                                     session_id($row["user"]);
                                     $_SESSION["loggedin"] = true;
                                     $_SESSION["email"] = $row["email"];
                                     $_SESSION["admin"] = $row["admin"];
                                     session_start();
                                     header ("Location: customer_dashboard.php");
                                 }  
                                 else{  
                                     $msg = 'Wrong username or password';
                                     if (session_status() === PHP_SESSION_ACTIVE) {
                                         session_destroy();
                                     }
                                 }
                             }     ;
                        ?>

                    </a><br>

                    <a id = "ai-email" class = "ci-info">

                    </a><br><br>

                    <button id = "ai-edit" class = "ci-edit">Edit</button>
                    <button id = "ai-cp" class = "ci-edit" onclick="ChangePassword()">Change Password</button>
                </div>
                <div class = "ai-nl">
                    <a class = "ci-head"> Newsletter </a>
                    <a id = "ai-status" class = "ci-info"></a>
                </div>
            </div>
        </div>
        <div class="cd-gi">3</div>
        <div class="cd-gi">
            <a class = "cd-head" >Address Book</a>
            <div class  = "divider"></div>
        </div>
    </div>

    <div id="Password-Modal" class="Password-Modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Modal Header</h2>
            </div>
            <div class="modal-body">
                <p>Some text in the Modal Body</p>
                <p>Some other text...</p>
            </div>
            <div class="modal-footer">
                <h3>Modal Footer</h3>
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