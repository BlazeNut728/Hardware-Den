
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="sidebar.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>StudentStat</title>
</head>

<body>
    <div class="toggle"></div>
    <nav class="sidebar">
        <ul>
            <li class="logo">
                <a>
                    <div class="text">Menu</div>
                </a>
            </li>
            <div class="Menulist">
                <li onclick="setActive(this,'dashboard.php')" style="--bg : #f44336" class="active">
                    <a>
                        <i class='bx bx-home-alt icon'></i>
                        <div class="text">Dashboard</div>
                    </a>
                </li>

                <li onclick="setActive(this,'attendance.php')" style="--bg : #ffa117">
                    <a>
                        <i class='bx bx-bar-chart-alt-2 icon'></i>
                        <div class="text">Attendance</div>
                    </a>
                </li>

                <li onclick="setActive(this,'messages.php')" style="--bg : #0fc70f">
                    <a>
                        <i class='bx bx-chat icon'></i>
                        <div class="text">Messages</div>
                    </a>
                </li>

                <li onclick="setActive(this,'settings.php')" style="--bg : #d951a1">
                    <a>
                        <i class='bx bx-cog icon'></i>
                        <div class="text">Settings</div>
                    </a>
                </li>
            </div>
            <div class="bottom">
                <li class="sign">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <div class="text">Logout</div>
                    </a>
                </li>
                <li class="mode" onclick="switchMode()">
                    <a>
                        <div class="sun-moon">
                            <i class='bx bx-moon toggleicon moon toggleicon' id="sun-moon"></i>
                        </div>
                        <div class="mode-text">Dark mode</div>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </a>
                </li>
            </div>
        </ul>
        </div>
    </nav>
    <div class="home">

    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="javascript/notification.js"></script>
    <script src="javascript/sidebar.js"></script>
</body>

</html>