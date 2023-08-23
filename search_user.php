<?php

    include_once 'connection.php';

    if(!isset($_POST["buscar"])){

    $_POST['buscar'] = "";

    $buscar = $_POST["buscar"];
    }

    $buscar = $_POST["buscar"];

    $SQL_READ = "SELECT * FROM alumnos WHERE nombre LIKE '%".$buscar."%' OR apellido LIKE '%".$buscar."%' OR sexo LIKE '%".$buscar."%' OR id LIKE '%".$buscar."%'";

    $query = mysqli_query($connect, $SQL_READ);


