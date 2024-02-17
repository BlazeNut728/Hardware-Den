<?php
   session_start();
   unset($_SESSION["user"]);
   unset($_SESSION["pass"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = customer_login.php');