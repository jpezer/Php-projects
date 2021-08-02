<?php 

require_once 'boot.php'; 

if(isset($_GET['post_id']) && isset($_SESSION['loggedUser'])){
    $post->deletePost($_GET['post_id']);
}

$posts = $post->selectAll('posts');



require_once 'views/index_view.php';

