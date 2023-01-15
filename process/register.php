<?php

require_once "../config/function.php";

$errors = [];


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

if (!isset($_POST['password'])) {
    $errors["error_password"] = "Ве молиме изберете лозинка";
} else if (empty($_POST['password'])) {
    $errors["error_password"] = "Ве молиме изберете лозинка";
} else if ((strlen($_POST['password']) < 5)) {
    $errors["error_password"] = "Лозинката треба да содржи најмалку 6 карактери";
} else {
    $password = $_POST['password'];
}

if(isset($_POST['dob']) && !empty($_POST['dob'])) {
    $dob = $_POST['dob'];
} else {
    $errors['error_dob'] = "Немате внесено датум!";
    $dob = '';
}




$image = uploadImage($_FILES['image'], '../images/');

if(is_array($image)) {

    print_r($image['error']);
    die();
}

if (!empty($errors)) {
    $message = http_build_query($errors, '', '&');
    header('Location: ../createuser.php?' . $message);
}


$data = [
    "first_name" => $first_name,
    "last_name" => $last_name,
    "dob"       => $dob,
    "email"     => $email,
    "password"  => $password,
    "image"     => $image
];


$user = insert($conn, $data, "users");






if($user) {
    header('Location: /index.php');
} else {
    header('Location: 404.php');
}





