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
    <?php      
        include('data_conn.php');
        $msg = '';
        $id = '';
        if (isset($_POST['cl-user'])) {
            $username = $_POST["cl-user"];  
            $password = $_POST["cl-pass"];
            $name = $_POST["cl-name"];
            $email = $_POST["cl-email"];
            $phone_number = $_POST["cl-number"];

            $sql = "SELECT * FROM `login_credential` WHERE email = '$email' OR pass = '$password' OR name = '$name' OR user = '$username' OR phone_number = '$phone_number";
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            $count = mysqli_num_rows($result);  
                
            if($count == 1){  
                    
                echo "Details Already Exists Please Use Different Information";
            }  
            else{  
                $sql = "INSERT INTO `login_credential` (`id`, `user`, `pass`, `name`, `email`, `phone_number`, `admin`) VALUES (NULL, $username, $password, $name, $email, $phone_number, '')";  
                  
                if($conn->query($sql) === TRUE){  
                    echo "<h1><center> Registration Successful </center></h1>";  
                    header("location: customer_login.php");
                }  
                else{  
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }   
            }
              
            }          
    ?>
<body>
        <?php include('navbar.php');?>
    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="customer_login.php">Register</a>
    </div>

    <div class= "ar">
        <a class="stc"> Customer Registration </a> <br><br>
    </div>

    <div class = "cl-container">

        <div class = "login-container"> 

            <a class = "rc"> Registered Customers </a>
        
            <a class = "iyhac"> If you have an account, sign in with your email address. </a>

            <form action="customer_register.php"  method="POST">

                <label for="text" class = "cl-text1" >Username:</label>
                <input type="text" id="cl-user" name="cl-user" class = "cl-email" placeholder="Your Username" autocomplete = "off" required>
                <br>
                <label for="text" class = "cl-text1" >Name:</label>
                <input type="text" id="cl-name" name="cl-name" class = "cl-email" placeholder="Your Full Name" autocomplete = "off" required>
                <br>
                <label for="number" class = "cl-text1" >Phone:</label>
                <input type="number" id="cl-number" name="cl-number" class = "cl-email" placeholder="Your Phone Number" autocomplete = "off" required>
                <br>
                <label for="email" class = "cl-text1" >Email:</label>
                <input type="email" id="cl-email" name="cl-email" class = "cl-email" placeholder="Your Email" autocomplete = "off" required>

                <label for="pass" class = "cl-text2" >Password:</label>
                <input type="password" id="cl-pass" name="cl-pass" class = "cl-pass" placeholder="Your Password" autocomplete = "off" required>

                <input type="submit" value="Submit" class="cl-submit">
                <a class = "cl-em"><?php echo $msg; ?></a>
            </form>

            <br>

        </div>

        <div class = "register-container"> 

            <a class = "rc"> Already a Customer? </a>
            <a class = "iyhac"> Then, Welcome Back </a>

            <a class = "iyhac">
                Advantages:<br>
                •  Check out faster <br>
                •  Keep more than one address <br>
                •  Track orders and more <br>
            </a>

            <input type="submit" value="Create An Account" class="cl-submit">

        </div>

    </div>
    
    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>

</body>
</html>