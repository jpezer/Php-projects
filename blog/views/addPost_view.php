<?php require_once 'partials/header.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Back to Blog</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
    </ul>
</nav>
<div class="jumbotron text-center">
    <h4>Add New Post</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <?php if($post->newPostStatus): ?>
                <div class="alert alert-success">Uspješno dodan novi post</div>
            <?php endif; ?>
            <form action="addPost.php" method="post">
                <input type="text" name="post_title" class="form-control" placeholder="Title"><br>
                <textarea name="post_description" class="form-control" placeholder="Post description" cols="30" rows="6"></textarea><br>
                <button type="submit" class="form-control btn btn-primary" name="post_subBtn">Add Post</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php'; ?>
