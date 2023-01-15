<?php
require_once "./config/db.php";

$conn=mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB) or die("Connection error!");

$users = [
    ["first_name" => "Irena", "last_name" => "Kunoska", "dob" => "1982-09-23", "email" => "blirena@gmail.com", "password" => "12345"],
    ["first_name" => "Tina", "last_name" => "Davcevska", "dob" => "1983-08-04", "email" => "tina@gmail.com", "password" => "123456"],
    ["first_name" => "Marija", "last_name" => "Janevska", "dob" => "1984-07-20", "email" => "marijaj@gmail.com", "passwrd" => "1234567"],
          ];
foreach ($users as $user)
{
    $keys = [];
    $values = [];
    foreach ($user as $key => $value)
    {
        $keys[] = $key;
        $values[] = "'$value'";
    }

    $keys = implode(',', $keys);
    $values = implode(',', $values);

    $queryInsert = "INSERT INTO users ($keys) VALUES ($values)";
    $query = mysqli_query($conn, $queryInsert);};
