
<?php require_once "partials/header.php"; ?>
<?php if(!isset($_SESSION['id'])){
    header("Location: index.php");
    } 
?>
<?php require_once "partials/navbar.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h4 class="text-center m-3">Novi oglas</h4>
            <form action="noviOglas.php" method="post">
                <input type="text" name="title" placeholder="title" class="form-control"><br>
                <input type="text" name="text" placeholder="text" class="form-control"><br>
                <input type="number" name="price" placeholder="price" class="form-control"><br>
                <select name="category" class="form-control">
                    <option value="Računala" class="form-control">Računala</option>
                    <option value="Bijela tehnika" class="form-control">Bijela tehnika</option>
                    <option value="Mobiteli" class="form-control">Mobiteli</option>
                    <option value="Sport" class="form-control">Sport</option>
                </select><br>
                <button type="submit" class="form-control btn btn-primary">Dodaj oglas</button>
            </form>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php"; ?>