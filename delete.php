<?php
include('conexion/conexion.php');
$id = $_GET['id'];
$delete = "DELETE FROM libro
              WHERE libro.idlibro = '$id'";

$execute = mysqli_query($conexion, $delete);

if ($execute == true) {
    header("Location: parati.php");
} else {
    echo ('Error!');
};
