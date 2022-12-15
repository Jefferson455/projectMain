<?php
include('conexion/conexion.php');


$idlibro = $_POST['idlibro'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$fk_idUsuarios = $_POST['idusuarios'];

$update = "UPDATE libro SET nombre='$nombre', descripcion='$descripcion', fk_idUsuarios='$fk_idUsuarios' WHERE idlibro='$idlibro'";

$ejecutado = mysqli_query($conexion, $update);

if ($ejecutado == 1) {
    header('location: parati.php');
} else {
    echo 'Algo salio mal';
}
