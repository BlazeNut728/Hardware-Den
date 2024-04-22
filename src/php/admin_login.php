<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_login.css">
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <title>Hardware Den</title>
</head>
<body>

    <div class="bg"> 
        <img src="https://media.discordapp.net/attachments/1196163965110202440/1196167412979093544/1080.png?ex=6637d7b6&is=662562b6&hm=5f404e616f9a8c292ecfdcb3060721cbd2839385bfc6c8ae59f303f8f4e4d8ea&=&format=webp&quality=lossless&width=1246&height=701" class="bgimg" alt="Vector">
    </div>

    <div class = form>
        <img src="https://cdn.discordapp.com/attachments/1196163965110202440/1196168757622616074/Group.png?ex=6637d8f7&is=662563f7&hm=c8372570e70845fae4661555252ad9e1052ab98b929d4f58bce0024bde0bd89d&" class="basket" alt="Basket">
        
        <form form action="admin_login.php" method="POST">
            <div class = Rectangle1>
            
                <i class="fa-solid fa-user" style="font-size:2.8vh; padding: 1vh; margin-left: 5px; color: white; "></i>
                <input type="text" name="user" id="user" placeholder = "USERNAME" autocomplete = "off" required>

            </div>
            <div class = Rectangle2>

                <i class="fa-solid fa-lock" style="font-size:2.8vh; padding: 1vh; margin-left: 5px; color: white;"></i>
                <input type="password" id="pass" name="pass" placeholder="PASSWORD" autocomplete="off" required>

            </div>

            <button type="submit" class="button" name ="btn" >LOGIN</button>

            <span class="rgr"><a href="register.php">Register</a></span>
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
      
        $sql = "SELECT * FROM `login_credential` where user = '$username' and pass = '$password' and admin = '1'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("location: admin_dashboard.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            header("location: admin_login.php");
        }
    }     
?>

</body>
</html>