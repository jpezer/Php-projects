<?php 
    require_once 'functions.php';
    if(isset($_SESSION['id'])){
        include "oglasi_view.php";
    }else{
        header("Location: index.php");
    }
?>