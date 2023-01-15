<?php require_once "header.php"; ?>

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

                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="exampleInputEmail1"  class="form-label">Email address</label>
                    <input type="email" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"  name="email">
                </div>
                <div class="input-group input-group-outline my-3 focused is-focused">
                    <label for="exampleInputPassword1"  class="form-label">Password</label>
                    <input type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)"  name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>

