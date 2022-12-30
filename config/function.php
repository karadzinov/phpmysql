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

?>