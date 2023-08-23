<?php

include 'connection.php';
$connect = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO alumnos (id, nombre, apellido, sexo) VALUES ('$id', '$nombre', '$apellido', '$sexo')";
$query = mysqli_query($connect, $sql);

if($query){
    header("Location: index.php");
}

?>