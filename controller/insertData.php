<?php
include('../conexion/conexion.php');

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$fk_idUsuarios = $_POST['fk_idUsuarios'];

$query = "INSERT INTO libro (nombre, descripcion, fk_idUsuarios) VALUES('$nombre', '$descripcion', '$fk_idUsuarios')";
$ejecutado = mysqli_query($conexion, $query);

if ($ejecutado == 1) {
    header('location: ../view/parati.php');
} else {
    echo 'Algo salio mal';
}
