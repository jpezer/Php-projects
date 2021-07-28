<?php require 'partials/header.php'; ?>
<?php require 'partials/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
        <form action="login.php" method="post">
                <input type="text" name="email" placeholder="Email" class="form-control"><br>
                <input type="password" name="password" placeholder="Password" class="form-control"><br>
                <button type="submit" class="btn btn-primary form-control">Login</button>
            </form>
        </div>
    </div>
</div>
<?php require 'partials/footer.php'; ?>