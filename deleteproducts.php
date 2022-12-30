<?php
require_once "./config/function.php";

$id = $_GET['id']; // 7


$product = delete($conn, $id, 'products');

if($product) {
    header('Location: /products.php');
} else {
    header('Location: /404.php');
}

