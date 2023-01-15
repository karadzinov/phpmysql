<?php require_once "header.php";


if(isset($_GET['error_password']) && !empty($_GET['error_password'])) {
    $error_password = $_GET['error_password'];
} else {
    $error_password = '';
}

if(isset($_GET['error_dob']) && !empty($_GET['error_dob'])) {
    $error_dob = $_GET['error_dob'];
} else {
    $error_dob = '';
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Register form</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="/process/register.php" method="post" enctype="multipart/form-data">


                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label class="form-label">Upload Image</label>
                    <input type="file" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="image">
                </div>



                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="first_name">
                </div>

                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label  class="form-label" for="last_name">Last Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"  name="last_name">
                </div>


                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="dob"  class="form-label">DOB</label>
                    <input type="date" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="dob">
                </div>
                <?php
                if($error_dob) {
                    echo '
                <div class="errors">
                    <p style="color: red;">'.$error_dob.'</p>
                </div>';
                }
                ?>

                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="exampleInputEmail1"  class="form-label">Email address</label>
                    <input type="email" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"  name="email">
                </div>
                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="exampleInputPassword1"  class="form-label">Password</label>
                    <input type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"  name="password">
                </div>
                <?php
                if($error_password) {
                    echo '
                <div class="errors">
                    <p style="color: red;">'.$error_password.'</p>
                </div>';
                }
                ?>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>

