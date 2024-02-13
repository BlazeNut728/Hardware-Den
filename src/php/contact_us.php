<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/contact_us.css">
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <title>Hardware Den</title>
</head>
    <?php      
        include('data_conn.php');
        if (isset($_POST['cl-email'] , $_POST['cl-ta'])) {
        $name = $_POST["cl-name"];
        $email = $_POST["cl-email"];
        $phone_number = $_POST["cl-number"];  
        $ta = $_POST["cl-ta"];

        $ta = mysqli_real_escape_string($conn, $ta); 
        
            $sql = "INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_number`, `wyom`) VALUES (NULL, $name, $email, $phone_number, $ta)";  
            
            if($conn->query($sql) === TRUE){  
                echo "<h1><center> Registration Successful </center></h1>";  
                header("location: contact_us.php");
            }  
            else{  
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }     
    ?>
<body>
        <?php include('navbar.php');?>
    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="contact_us.php">Contact Us</a>
    </div>

    <div class= "ar">
        <a class="stc"> Contact Us </a> <br><br>
    </div>

   

    <div class = "cl-container">

        <div class = "cu-container"> 
        
            <a class = "iyhac"> We love hearing from you, Hardware enthusiasts. </a>
            <a class = "iyhac"> Contact Us and we will make sure to get back to you as soon as possible. </a><br>

            <form action="contact_us.php" class = "form-cu"  method="POST">

                <div class="cu-wrapper">
                    <div>
                        <label for="name" class = "cl-text1" >Name</label>
                        <input type="text" id="cl-name" name="cl-name" class = "cl-email" placeholder="Your Name" autocomplete = "off" required>
                    </div>
                    <div>
                        <label for="email" class = "cl-text2" >Email</label>
                        <input type="email" id="cl-email" name="cl-email" class = "cl-email" placeholder="Your Email" autocomplete = "off" required>
                    </div>
                    <div>
                        <label for="number" class = "cl-text1" >Phone Number</label>
                        <input type="number" id="cl-number" name="cl-number" class = "cl-email" placeholder="Your Number" autocomplete = "off" required>
                    </div>
                </div>

                <br>
                <label for="ta" class = "cl-text1" >What's on your mind ?</label>

                <textarea id="cl-ta" name="cl-ta" class = "cl-ta" form="form-cu">Jot us a note and we'll quickly get back to you as soon as possible</textarea>

                <input type="submit" value="Submit" class="cl-submit">
            </form>

        </div>

    </div>
    
    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>

</body>
</html>