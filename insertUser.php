<?php
include('conexion/conexion.php');

$nombre = $_GET['nombre'];
$usuario = $_GET['usuario'];
$password = $_GET['password'];

$insert = "INSERT INTO usuarios (nombre, usuario, password)  VALUES ('$nombre', '$usuario', '$password')";

$execute = mysqli_query($conexion, $insert);

if ($execute === true) {
    header('location: login.php');
} else {
    echo ('Error al añadir nuevo usuairo');
}
