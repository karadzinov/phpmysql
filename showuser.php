<?php
require_once "./config/db.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die("Connection error");

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

$user = mysqli_fetch_assoc($query);

require_once "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Welcome <?php echo $user['first_name']; ?></p>
        </div>
    </div>
</div>
<h1></h1>

<?php require_once "footer.php"; ?>