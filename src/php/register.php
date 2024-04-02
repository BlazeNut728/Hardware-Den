<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <title>Hardware Den</title>
</head>
<body>

    <div class="bg"> 
        <img src="https://cdn.discordapp.com/attachments/1196163965110202440/1196167412979093544/1080.png?ex=6612edb6&is=660078b6&hm=6e7d6ec6f630cff09c55daa5ef8a2d9be09bd4b1906851e3dcf99d1668b95b18&" class="bgimg" alt="Vector">
    </div>

    <div class = form>
        <img src="https://cdn.discordapp.com/attachments/1196163965110202440/1196462185883369593/Register.png?ex=6614003e&is=66018b3e&hm=a54597c2ecf9eb86037335a9c85ef3b8f6791037c6a5c62bbedf59f4c8a0b478&" class="basket" alt="Basket">
        
        <form form action="register.php" method="POST">
            <div class = Rectangle1>
            
                <i class="fa-solid fa-user" style="font-size:2.8vh; padding: 1.0vh; margin-left: 0.5vh; color: white; "></i>
                <input type="text" name="user" id="user" placeholder = "USERNAME" autocomplete = "off" required>

            </div>
            <div class = Rectangle2>

                <i class="fa-solid fa-lock" style="font-size:2.8vh; padding: 1.0vh; margin-left: 0.5vh; color: white;"></i>
                <input type="password" id="pass" name="pass" placeholder="PASSWORD" autocomplete="off" required>

            </div>
            <div class = Rectangle2>

                <i class="fa-solid fa-address-card" style="font-size:2.8vh; padding: 1.0vh; margin-left: 0.5vh; color: white;"></i>
                <input type="text" name="name" id="name" placeholder = "NAME" autocomplete = "off" required>

            </div>
            <div class = Rectangle2>

                <i class="fa-solid fa-envelope" style="font-size:2.8vh; padding: 1.0vh; margin-left: 0.5vh; color: white;"></i>
                <input type="email" name="email" id="email" placeholder = "E-MAIL" autocomplete = "off" required>

            </div>
            <div class = Rectangle2>

                <i class="fa-solid fa-phone" style="font-size:2.8vh; padding: 1.0vh; margin-left: 0.5vh; color: white;"></i>
                <input type="number" name="number" id="number" placeholder = "PHONE NUMBER" autocomplete = "off" required>

            </div>

            <button type="submit" class="button" name ="btn" >REGISTER</button>

            <span class="rgr"><a href="http://localhost:3000/src/php/login.php">Login</a></span>
            <span class="psw"><a href="#">Forgot Password?</a></span>

        </form>
        

    </div>

    <?php      
    include('data_conn.php');
    if (isset($_POST['user'])) {
    $username = $_POST["user"];  
    $password = $_POST["pass"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["number"];  
      
        $sql = "INSERT INTO `login_credential` (`id`, `user`, `pass`, `name`, `email`, `phone_number`, `admin`) VALUES (NULL, $username, $password, $name, $email, $phone_number, '')";  
          
        if($conn->query($sql) === TRUE){  
            echo "<h1><center> Registration Successful </center></h1>";  
            header("location: login.php");
        }  
        else{  
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }     
?>
        
</body>
</html>