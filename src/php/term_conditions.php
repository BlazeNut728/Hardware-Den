<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/tc_au.css">
    <link rel="icon" type="images/x-icon" href="../../images/favicon.ico" />
    <script src="https://kit.fontawesome.com/6e301e326d.js" crossorigin="anonymous"></script>
    <title>Hardware Den</title>
</head>
<body>
    <header>
        <?php include('navbar.php');?>
    </header>

    <div class= "ar">
        <a class ="hm" href="#home">Home</a> <a style = "color:#ff8400;"> > </a> <a class ="lg" href="login.php">Login</a>
    </div>

    <div class= "ar">
        <a class="stc"> Shop Terms & Conditions </a> <br>
    </div>

    <div class = "gtc">
    GENERAL TERMS AND CONDITIONS FOR SALE OF PRODUCTS AND SERVICES
    </div>
        
        <div class = "rules-card">

        </div>

    <script>
        function displayRules() {
            fetch('../json/rules.json')
                .then(response => response.json())
                .then(data => {
                    for (const rule in data) {
                        const ruleItem = document.createElement('article');
                        ruleItem.innerHTML = `<br><h3>${data[rule].heading}</h3>
                        <p>${data[rule].description}</p>`;
                        document.querySelector('.rules-card').appendChild(ruleItem);
                    }
                })
                .catch(error => console.log(error));
        }
        displayRules();
    </script>

    <footer>
        <br><br>
        <?php include('footer.php');?>
    </footer>

</body>
</html>