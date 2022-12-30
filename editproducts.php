<?php require_once "header.php";
require_once "./config/function.php";


$id = $_GET['id'];

$product = get($conn, $id, 'products');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create product</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="/process/editproduct.php" method="post">

                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="name" value="<?php echo $product['name'] ?>">
                </div>

                <?php

                $male = '';
                $female = '';

                        if($product['type'] === "male") {
                            $male = 'checked';
                        } else {
                            $female = 'checked';
                        }


                ?>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="inlineRadio1" value="male" name="sex" <?php echo $male ?>/>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio2" value="female" name="sex"  <?php echo $female ?>/>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>


                <div>
                    <label for="description"  class="form-label">Description</label>
                    <textarea name="description" id="description"><?php echo $product['description']; ?></textarea>
                </div>

                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="price"  class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" onfocus="focused(this)" onfocusout="defocused(this)"  name="price" value="<?php echo $product['price'] ?>">
                </div>
                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="exampleInputPassword1"  class="form-label">Image</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="image" value="<?php echo $product['image'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>

