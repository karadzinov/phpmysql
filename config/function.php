<?php
require_once "db.php";

function insert($conn, $data, $table)
{
    $keys = [];
    $values = [];
    foreach ($data as $key => $value) {
        $keys[] = $key;
        $values[] = "'$value'";
    }

    $keys = implode(',', $keys);
    $values = implode(',', $values);

    $queryInsert = "INSERT INTO $table ($keys) VALUES ($values)";
    $query = mysqli_query($conn, $queryInsert);
    return $query;
}

function getAll($conn, $table)
{

    $querySelect = "SELECT * FROM $table";

    $query = mysqli_query($conn, $querySelect);

    $results = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $results[] = $row;
    }

    return $results;
}

function get($conn, $id, $table)
{
    $querySelect = "SELECT * FROM $table WHERE id=$id";
    $query = mysqli_query($conn, $querySelect);

    return mysqli_fetch_assoc($query);

}


function update($conn, $id, $data, $table)
{

    $buildQuery = [];

    foreach ($data as $key => $value) {
        $buildQuery[] = "$key = '$value'";
    }

    $buildQuery = implode(',', $buildQuery);

    $queryExecute = "UPDATE $table SET $buildQuery WHERE id = '$id'";

    $query = mysqli_query($conn, $queryExecute);

    return $query;

}

function delete($conn, $id, $table)
{
    $querySelect = "DELETE FROM $table WHERE id=$id";
    $query = mysqli_query($conn, $querySelect);
    return $query;
}

function uploadImage($files, $target_dir)
{

    $errors["error"] = [];

    $check = getimagesize($files["tmp_name"]);
    if($check !== false) {

    } else {
        $errors["error"]["image_size"] = "File is an image - " . $check["mime"] . ".";
    }

    $target_file = $target_dir . basename($files["name"]);


    // Check if file already exists
    if (file_exists($target_file)) {
        $errors["error"]["file_exist"] = "File already exists";
    }

    if ($files["size"] > 500000000) {
        $errors["error"]["file_size"] = "Sorry, your file is too large.";
    }


    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
    {
        $errors["error"]["file_types"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }


    if(count($errors["error"]) > 0) {
        return $errors;
    }

    if (move_uploaded_file($files["tmp_name"], $target_file)) {
        return htmlspecialchars(basename($files["name"]));
    } else {
        return false;
    }
}

?>