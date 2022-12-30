<?php
require_once "./config/function.php";

$id = $_GET['id'];

$product = get($conn, $id, 'products');



require_once "header.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><img src="<?php echo $product['image'] ?>" alt="<?php echo $product['name'] ?>"></p>
                <p>Product name: <?php echo $product['name']; ?></p>
            </div>

            <div class="col-md-12">
                <?php echo $product['description']; ?>
            </div>
        </div>
    </div>
    <h1></h1>

<?php require_once "footer.php"; ?>