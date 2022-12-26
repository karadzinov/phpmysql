<?php
session_start();




if(!isset($_SESSION["user"]) && empty($_SESSION["user"])) {
    header('Location: /login.php');
}


require_once "header.php";


?>

<h1>Welcome <?php echo $_SESSION['user']['first_name']; ?></h1>
<?php require_once "footer.php"; ?>

