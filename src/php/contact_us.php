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
        if (isset($_POST['name']) && isset($_POST['number']) && isset($_POST['email']) && isset($_POST['ta']) ) {
        $name = $_POST["name"];
        $phone_number = $_POST["number"];  
        $ta = $_POST["ta"];
        $email = $_POST["email"];

        $email = mysqli_real_escape_string($conn, $email); 
        $ta = mysqli_real_escape_string($conn, $ta); 
        
        $sql = "INSERT INTO contact_us (id, name, email, phone_number, woym) VALUES (NULL, '$name', '$email', '$phone_number', '$ta')"; 
            
            if($conn->query($sql) === TRUE){  
                $message = "We will get back to you soon.";
                echo "<script>alert('$message');</script>"; 
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

    <div class = cu-sb>

        <i class="fa-solid fa-location-dot" style="font-size:1.9vh; padding: 1vh; margin-left: 2.25vh; margin-top: 2.4vh; color: black;"></i>
        <a class = "sb-head"> Address: </a><br>
        <a class = "sb-info"> 1234 Street Address, City, 1234 </a><br>

        <i class="fa-solid fa-phone" style="font-size:1.9vh; padding: 1vh; margin-left: 2.25vh; margin-top: 2.4vh; color: black;"></i>
        <a class = "sb-head"> Phone: </a><br>
        <a class = "sb-info"> (00)1234 5678 </a><br>

        <i class="fa-solid fa-clock" style="font-size:1.9vh; padding: 1vh; margin-left: 2.25vh; margin-top: 2.4vh; color: black;"></i>
        <a class = "sb-head"> We are Open: </a><br>
        <a class = "sb-info"> Monday - Friday: </a><br>
        <a class = "sb-info"> 9:00 AM - 5:30 PM </a><br>

        <i class="fa-solid fa-location-dot" style="font-size:1.9vh; padding: 1vh; margin-left: 2.25vh; margin-top: 2.4vh; color: black;"></i>
        <a class = "sb-head"> Email: </a><br>
        <a class = "sb-info" href = "hardwareden@gmail.com"> hardwareden@gmail.com </a>

    </div>

        <div class = "cu-container"> 
        
            <a class = "iyhac"> We love hearing from you, Hardware enthusiasts. </a>
            <a class = "iyhac"> Contact Us and we will make sure to get back to you as soon as possible. </a><br>

            <form action="contact_us.php" id = "form-cu" class = "form-cu"  method="POST">

                <div class="cu-wrapper">
                    <div>
                        <label class = "cl-text1" >Name</label>
                        <input type="text" id="name" name="name" class = "cl-email" placeholder="Your Name" autocomplete = "off" required>
                    </div>
                    <div>
                        <label class = "cl-text2" >Email</label>
                        <input type="email" id="email" name="email" class = "cl-email" placeholder="Your Email" autocomplete = "off" required>
                    </div>
                    <div>
                        <label class = "cl-text1" >Phone Number</label>
                        <input type="number" id="number" name="number" class = "cl-email" placeholder="Your Number" autocomplete = "off" required>
                    </div>
                </div>

                <br>
                <label class = "cl-text1" >What's on your mind ?</label>
                <textarea id="ta" name="ta" class = "cl-ta" rows="20" cols="115">Jot us a note and we'll quickly get back to you as soon as possible</textarea>

                <button type="submit" class="cl-submit" name ="submit" >Submit</button>
            </form>

        </div>

    </div>
    
    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>
</body>
</html>