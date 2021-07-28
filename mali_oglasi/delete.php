<?php 
    require_once 'functions.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM oglasi WHERE id = $id";

    $query = mysqli_query(db(),$sql);

    header('Location: user_view.php');
?>