<?php

session_start();


if (!isset($_SESSION["user"]) && empty($_SESSION["user"])) {
    header('Location: /login.php');
}


require_once "./config/function.php";

$products = getAll($conn, 'products');


require_once "header.php";


?>

<div class="container">

    <div class="row">
        <div class="col-12">
            <a href="/createproducts.php" class="btn btn-primary">+ Create Products</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php


                foreach ($products as $product) {
                    echo '<tr>
                    <td><a href="/showproduct.php?id=' . $product['id'] . '">' . $product['id'] . '</a></td>
                          <td><img src="/images/' . $product['image'] . '" alt="' . $product['name'] . '" style="max-width: 150px;"/></td>
                    <td>' . $product['name'] . '</td>
              
                    <td>' . $product['price'] . '</td>
                    <td>' . strip_tags(mb_strimwidth($product['description'], 0, 100, "...")) . '</td>
                    <td>' . $product['type'] . '</td>
                    <td>
                    <a href="/deleteproducts.php?id=' . $product['id'] . '" class="btn btn-danger">Delete</a>
                    <a href="/editproducts.php?id=' . $product['id'] . '" class="btn btn-warning">Edit</a>
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

