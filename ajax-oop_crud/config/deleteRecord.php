<?php
    require("connect.php");
    
    $db = new Database();
    $connection = $db->getConn();
    
    $id=$_GET['id'];
    $query = "DELETE FROM records WHERE ID = $id";
    mysqli_query($connection,$query);
?>