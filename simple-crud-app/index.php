<?php 
    require "connection.php";

    $sql = "SELECT * FROM names";

    $query = mysqli_query($db,$sql);

    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);

    /* echo "<pre>";
    var_dump($result);
    echo "</pre>"; */
    
    require "index_view.php";
?>
