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
        <img src="https://media.discordapp.net/attachments/1196163965110202440/1196167412979093544/1080.png?ex=65b6a4b6&is=65a42fb6&hm=5236a6200e7fabc27304767c3cdbf49f136e41c8d11c475416d4a91bbbef2220&=&format=webp&quality=lossless&width=1244&height=700" class="bgimg" alt="Vector">
    </div>

    <div class = form>
        <img src="https://media.discordapp.net/attachments/1196163965110202440/1196462185883369593/Register.png?ex=65b7b73e&is=65a5423e&hm=2c3f51ea0df3ae67798a4f685b3b26915a2c225247051aa1ba564386d466c75c&=&format=webp&quality=lossless&width=632&height=699" class="basket" alt="Basket">
        
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