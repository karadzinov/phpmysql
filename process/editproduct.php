<?php
require_once "../config/function.php";


if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
} else {
    $id = '';
}

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

$image = uploadImage($_FILES['image'], '../images/');


$data = [
    'name' =>        $name,
    'type' =>        $type,
    'description' => $description,
    'price' =>       $price,
    'image' =>       $image
];



$product = update($conn, $id, $data, 'products');


if($product) {
    header('Location: ../products.php');
} else {
    header('Location: ./404.php');
}