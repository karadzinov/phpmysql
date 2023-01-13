<?php
require_once "./config/db.php";

$conn = mysqli_connect('localhost', 'homestead', 'secret', 'firstdb') or die('Connection error');

$users = [
    ["first_name" => "Petko", "last_name" => "Petkovski", "dob" => "1999-03-15", "email" => "petko@yahoo.com", "password" => "159951"],
    ["first_name" => "Trajko", "last_name" => "Trajkovski", "dob" => "1968-11-25", "email" => "trajko@yahoo.com", "password" => "125489"],
    ["first_name" => "Petko", "last_name" => "Petkovski", "dob" => "1999-03-15", "email" => "petko@yahoo.com", "password" => "159951"],
    ["first_name" => "Petko", "last_name" => "Petkovski", "dob" => "1999-03-15", "email" => "petko@yahoo.com", "password" => "159951"],
    ["first_name" => "Petko", "last_name" => "Petkovski", "dob" => "1999-03-15", "email" => "petko@yahoo.com", "password" => "159951"],
];


foreach ($users as $user) {
    $keys = [];
    $values = [];
    foreach ($user as $key => $value) {
        $keys[] = $key;
        $values[] = "'$value'";
    }
    $keys = implode(',', $keys);
    $values = implode(',', $values);

    $squeryInsert = "INSERT INTO users ($keys) VALUES ($values)";
    $query = mysqli_query($conn, $squeryInsert);

}