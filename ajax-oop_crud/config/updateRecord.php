<?php
    require("connect.php");
    
    $db = new Database();
    $connection = $db->getConn();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    $query = "UPDATE records SET Name = '$name', Age=$age, Course='$course' WHERE ID = $id";
    mysqli_query($connection,$query);
?>