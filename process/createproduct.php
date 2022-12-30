<?php

require_once "../config/function.php";

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = '';
}

if (isset($_POST['description']) && !empty($_POST['description'])) {
    $description = $_POST['description'];
} else {
    $description = '';
}

if (isset($_POST['sex']) && !empty($_POST['sex'])) {
    $type = $_POST['sex'];
} else {
    $type = '';
}

if (isset($_POST['price']) && !empty($_POST['price'])) {
    $price = $_POST['price'];
} else {
    $price = '';
}

if (isset($_POST['image']) && !empty($_POST['image'])) {
    $image = $_POST['image'];
} else {
    $image = '';
}

$data = [
    'name' =>        $name,
    'type' =>        $type,
    'description' => $description,
    'price' =>       $price,
    'image' =>       $image
];

$product = insert($conn, $data, 'products');

if($product) {
    header('Location: /products.php');
} else {
    header('Location: 404.php');
}

