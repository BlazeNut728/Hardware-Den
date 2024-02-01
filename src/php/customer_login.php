<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/customer_login.css">
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <title>Hardware Den</title>
</head>
<body>
        <?php include('navbar.php');?>
    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="customer_login.php">Login</a>
    </div>

    <div class= "ar">
        <a class="stc"> Customer Login </a> <br><br>
    </div>

    <div class = "cl-container">

        <div class = "login-container"> 

            <a class = "rc"> Registered Customers </a>
        
            <a class = "iyhac"> If you have an account, sign in with your email address. </a>

            <form action="customer_login.php"  method="POST">
                <label for="email" class = "cl-text1" >Email:</label>
                <input type="email" id="cl-email" name="cl-email" class = "cl-email" placeholder="Your Email" autocomplete = "off" required>
                
                <label for="pass" class = "cl-text2" >Password:</label>
                <input type="password" id="cl-pass" name="cl-pass" class = "cl-pass" placeholder="Your Password" autocomplete = "off" required>

                <input type="submit" value="submit" class="cl-submit">
            </form>

        </div>

        <div class = "register-container"> 

            <a class = "rc"> New Customer? </a>
            <a class = "iyhac"> Creating an account has many benefits: </a>

            <a class = "iyhac">
                •  Check out faster <br>
                •  Keep more than one address <br>
                •  Track orders and more <br>
            </a>

            <input type="submit" value="Create An Account" class="cl-submit">

        </div>

    </div>
    <?php      
            include('data_conn.php');
            if (isset($_POST['cl-email'])) {
            $email = $_POST["cl-email"];  
            $password = $_POST["cl-pass"];  
            
                //to prevent from mysqli injection  
                $username = stripcslashes($email);  
                $password = stripcslashes($password);  
                $username = mysqli_real_escape_string($conn, $email);  
                $password = mysqli_real_escape_string($conn, $password);  
            
                $sql = "SELECT * FROM `login_credential` where email = '$email' and pass = '$password'";  
                $result = mysqli_query($conn, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                
                if($count == 1){  
                    echo "<h1><center> Login successful </center></h1>"; 
                    header("location: term_conditions.php");
                }  
                else{  
                    echo "<h1> Login failed. Invalid username or password.</h1>";  
                    header("location: customer_login.php");
                }
            }     
        ?>
    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>

</body>
</html>