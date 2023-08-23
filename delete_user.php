<?php

    include 'connection.php';
    $connect = connection();

    $id = $_GET ['id'];

    $sql = "DELETE FROM alumnos WHERE id = $id";

    $query = mysqli_query($connect, $sql);

    if($query){
        Header ("Location: index.php");
    }

?>

