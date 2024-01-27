<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />

    <title>Hardware Den</title>
  </head>
  <body>
    <div class = top-bar> 
    <a class = "tbt"> Mon-Thu:  9:00 AM - 5:30 PM </a>
    <a class = "tbh">Visit our showroom in 1234 Street Adress City Address, 1234  <u>Contact Us</u></a>
    <a class = "tbt"> Call Us: (00) 1234 5678 </a>
    <a href="#PRF"><i class="fa-brands fa-square-facebook" style="font-size:1.9vh; margin-left: 1.0vh; padding: 1vh; color: white;"></i></a>
    <a href="#PRF"><i class="fa-brands fa-instagram" style="font-size:1.9vh; padding: 1vh; color: white;"></i></a>

    </div>
      <div class="topnav">
        <img src="https://media.discordapp.net/attachments/1196163965110202440/1196761972146966578/HDO.png?ex=65b8ce70&is=65a65970&hm=4eb0287e5a682a30c2ef586498ff210fd3edfeb48ef27257fe1ae7133516b28c&=&format=webp&quality=lossless&width=660&height=700" class = "logo" alt="Logo">

        <a class="df" href="#LPT">Laptops</a>
        <a class="df" href="#DPC">Desktop PC's</a>
        <a class="df" href="#ND">Networking Devices</a>
        <a class="df" href="#PS">Printers & Scanners</a>
        <a class="df" href="#PCP">PC Parts</a>
        <a class="df" href="#AOP">All Other Products</a>
        <a class="df" href="#RP">Repairs</a>

        <a class="od" href="#OD">Our Deals</a>

        <div class="search-container">
          <form action="/search" method="post">
            <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
            <label class="button searchbutton" for="searchright"><span class="mglass">&#9906;</span></label>
          </form>
        </div>

        <a class="of" href="#CRT"><i class="fa badge fa-lg" value=8 style="font-size:1.9vh; padding: 1vh; margin-left: 2.25vh; margin-top: 3.3vh; color: black;">&#xf07a;</i></a>
        <a class="of" href="#PRF"><i class="fa-solid fa-user" value=8 style="font-size:1.9vh; padding: 1vh; margin-left: 2.25vh; margin-top: 2.4vh; color: black;"></i></a>      

      </div>

      <div class = "sep">

      </div>


    <script>
      <?php
        include('data_conn.php');

        $search = $_POST['search'];
        $sql = "Select * from students where name like '%$search%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc() )
          {
	          echo $row["name"]."  ".$row["age"]."  ".$row["gender"]."<br>";
          }
        } 
        else 
        {
	        echo "0 records";
        }

        $conn->close();

      ?>
    </script>
    
  </body>
</html>