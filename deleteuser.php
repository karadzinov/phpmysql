<?php
require_once "./config/db.php";

$id = $_GET['id'];

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB);


$query = mysqli_query($conn, "DELETE FROM users WHERE id='$id'");

if($query) {
    header('Location: /index.php');
} else {
    header('Location: /404.php');
}

