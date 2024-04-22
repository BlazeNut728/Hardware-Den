<?php
include('data_conn.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$id = $_POST['id'];
$user = $_POST['user'];
$name = $_POST['name'];
$number = $_POST['phone'];
$email = $_POST['email'];

$page = $_POST['page'];

if($page = 'admin_user')
{

// Update data in the users table
$sql = "UPDATE login_credential SET user = '$user', name='$name', email='$email', phone_number='$number' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: 'admin_user.php'");
} else {
    echo "Error updating record: " . $conn->error;
}

}
