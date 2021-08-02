<?php 
require_once 'boot.php';


if(!isset($_SESSION['loggedUser'])){
    header('Location: index.php');
}

if(isset($_POST['post_subBtn'])){
    $post->createPost();
}

require_once 'views/addPost_view.php';
?>