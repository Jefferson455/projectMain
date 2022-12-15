<?php

$destino = "jeffersonguzman167@gmail.com";
$nombre = $_post["nombre"];
$correo = $_post["correo"];

$content = "Nombre: " . $nombre . "\n" . $correo;

$sendMail = mail($destino, "contacto", $content);
header("Location:viewMail.php");
if ($sendMail == true) {
    echo ("todo bien");
} else {
    echo ("hay un error");
}
