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
        <img src="https://cdn.discordapp.com/attachments/1196163965110202440/1196167412979093544/1080.png?ex=6612edb6&is=660078b6&hm=6e7d6ec6f630cff09c55daa5ef8a2d9be09bd4b1906851e3dcf99d1668b95b18&" class="bgimg" alt="Vector">
    </div>

    <div class = form>
        <img src="https://cdn.discordapp.com/attachments/1196163965110202440/1196183586852851722/Group-removebg-preview.png?ex=6612fcc7&is=660087c7&hm=d08150e3042dfa40a3dae66c1c407589884085d6a449accc082acffc40fa163e&" class="basket" alt="Basket">
        
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
            header("location: admin_panel.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            header("location: admin_login.php");
        }
    }     
?>

</body>
</html>