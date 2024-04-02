<?php
session_start();

if (isset($_POST['logout']) && $_POST['logout'] === 'true') {
    $_SESSION['logout'] = true;
    session_unset();
    session_destroy();
    header('Location: customer_login.php');
}