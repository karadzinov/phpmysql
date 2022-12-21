<?php
require_once "./config/db.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die("Connection error!");

$query = mysqli_query($conn, "SELECT * FROM users");


$user = ["first_name" => "Irena", "last_name" => "Kunovska", "email" => "irena@pingdevs.com"];


$users = [];

while ($row = mysqli_fetch_assoc($query)) {
    $users[] = $row;
}


require_once "header.php";


?>

<div class="container">

    <div class="row">
        <div class="col-12">
            <a href="/createuser.php" class="btn btn-primary">+ Create User</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php


                foreach ($users as $user) {
                    echo '<tr>
                    <td><a href="/showuser.php?id=' . $user['id'] . '">' . $user['id'] . '</a></td>
                    <td>' . $user['first_name'] . '</td>
                    <td>' . $user['last_name'] . '</td>
                    <td>' . $user['dob'] . '</td>
                    <td>' . $user['email'] . '</td>
                    <td>
                    <a href="/deleteuser.php?id=' . $user['id'] . '" class="btn btn-danger">Delete</a>
                    <a href="/edituser.php?id=' . $user['id'] . '" class="btn btn-warning">Edit</a>
                    </td>
                </tr>';
                }

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once "footer.php"; ?>

