<?php
    require("connect.php");

    $db = new Database();
    $connection = $db->getConn();

    $id = $_GET['id'];
    $query = "SELECT * FROM records WHERE ID=$id";
    $results = mysqli_query($connection, $query);
    $data = mysqli_fetch_array($results);
    echo json_encode($data);
?>