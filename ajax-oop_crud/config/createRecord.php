<?php
    require("connect.php");
    
    $db = new Database();
    $connection = $db->getConn();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    $query = "INSERT INTO records VALUES ($id, '$name', '$age','$course')";
    mysqli_query($connection,$query);
?>