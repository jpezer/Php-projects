<?php require_once "partials/header.php"; ?>
<?php require_once "partials/navbar.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="register.php" method="post">
                <input type="text" name="name" placeholder="name" class="form-control"><br>
                <input type="email" name="email" placeholder="email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <button type="submit" class="btn btn-primary form-control">Register</button>
            </form>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php"; ?>