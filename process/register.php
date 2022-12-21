<?php

if(isset($_POST['first_name']) && !empty($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
} else {
    $first_name = '';
}

if(isset($_POST['last_name']) && !empty($_POST['last_name'])) {
    $last_name = $_POST['last_name'];
} else {
    $last_name = '';
}

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

if(isset($_POST['dob']) && !empty($_POST['dob'])) {
    $dob = $_POST['dob'];
} else {
    $dob = '';
}


require_once "../config/db.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die("Connection error");

$queryExecute = "INSERT INTO users (first_name, last_name, email, password, dob) VALUES ('$first_name', '$last_name', '$email', '$password', '$dob')";


$query = mysqli_query($conn, $queryExecute);

if($query) {
    header('Location: /index.php');
} else {
    header('Location: 404.php');
}


