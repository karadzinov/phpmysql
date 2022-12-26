<?php require_once "header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="/process/login.php" method="post">
                    <div class="input-group input-group-outline my-3 focused is-focused">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="email">
                    </div>
                    <div class="input-group input-group-outline my-3 focused is-focused">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>