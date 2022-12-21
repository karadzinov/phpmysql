<?php require_once "header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Register form</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="/process/register.php" method="post">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" aria-describedby="First Name" name="first_name">

                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" aria-describedby="Last Name" name="last_name">
                </div>


                <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="date" class="form-control" id="dob" aria-describedby="dob" name="dob">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>

