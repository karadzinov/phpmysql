<?php
session_start();
require_once "../config/db.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');

if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}

if(isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
} else {
    $password = '';
}

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

$user = mysqli_fetch_assoc($query);

if(isset($user['first_name'])) {

    $_SESSION["user"] = $user;

    header('Location: /user.php?user='. $user['first_name']); // Location: /user.php?user=Matea
} else {
    header('Location: /404.php');
}







