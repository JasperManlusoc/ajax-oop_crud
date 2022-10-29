<?php
    require("connect.php");
    
    $db = new Database;

    $connection = $db->getConn();

    $query = "SELECT * FROM records";
    $results = mysqli_query($connection,$query);

    while ($row = mysqli_fetch_array($results)){
        echo "<tr>"
            ."<td>".$row['id']."</td>"
            ."<td>".$row['name']."</td>"
            ."<td>".$row['age']."</td>"
            ."<td>".$row['course']."</td>"
            ."<td>"
            ."<button class='btn btn-warning edit m-1' data-toggle='modal' data-target='#editUserModal' value='".$row['id']."'>Edit</button>"
            ."<button class='btn btn-danger delete m-1' value='".$row['id']."'>Delete</button>"
            ."</td>"
            ."</tr>";
    }
    
?>