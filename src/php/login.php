<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <title>Hardware Den</title>
</head>
<body>

    <div class="bg"> 
        <img src="https://media.discordapp.net/attachments/1196163965110202440/1196167412979093544/1080.png?ex=65b6a4b6&is=65a42fb6&hm=5236a6200e7fabc27304767c3cdbf49f136e41c8d11c475416d4a91bbbef2220&=&format=webp&quality=lossless&width=1244&height=700" class="bgimg" alt="Vector">
    </div>

    <div class = form>
        <img src="https://media.discordapp.net/attachments/1196163965110202440/1196183586852851722/Group-removebg-preview.png?ex=65b6b3c7&is=65a43ec7&hm=69cfd79540890af9e307513f8659311b314667fce7e2d55a647a8a2fe3bd164a&=&format=webp&quality=lossless&width=446&height=367" class="basket" alt="Basket">
        
        <form form action="login.php" method="POST">
            <div class = Rectangle1>
            
                <i class="fa-solid fa-user" style="font-size:2.8vh; padding: 1vh; margin-left: 5px; color: white; "></i>
                <input type="text" name="user" id="user" placeholder = "USERNAME" autocomplete = "off" required>

            </div>
            <div class = Rectangle2>

                <i class="fa-solid fa-lock" style="font-size:2.8vh; padding: 1vh; margin-left: 5px; color: white;"></i>
                <input type="password" id="pass" name="pass" placeholder="PASSWORD" autocomplete="off" required>

            </div>

            <button type="submit" class="button" name ="btn" >LOGIN</button>

            <span class="rgr"><a href="http://localhost:3000/src/php/register.php">Register</a></span>
            <span class="psw"><a href="#">Forgot Password?</a></span>

        </form>
        

    </div>

    <?php      
    include('data_conn.php');
    if (isset($_POST['user'])) {
    $username = $_POST["user"];  
    $password = $_POST["pass"];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM `login_credential` where user = '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("location: ../dashboard.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            header("location: login.php");
        }
    }     
?>

</body>
</html>