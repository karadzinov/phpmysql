<?php
require_once "header.php";
require_once "./config/db.php";


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die("Connection error!");

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

$user = mysqli_fetch_assoc($query);

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Update form</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="/process/update.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label class="form-label">Upload Image</label>
                    <input type="file" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="image">
                </div>


                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"  name="first_name" value="<?php echo $user['first_name']; ?>">

                </div>

                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="last_name" value="<?php echo $user['last_name']; ?>">
                </div>


                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="dob" class="form-label">DOB</label>
                    <input type="date" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"  name="dob" value="<?php echo $user['dob']; ?>">
                </div>

                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"  name="email" value="<?php echo $user['email']; ?>">
                </div>
                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="password" value="<?php echo $user['password']; ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




<?php require_once "footer.php"; ?>
