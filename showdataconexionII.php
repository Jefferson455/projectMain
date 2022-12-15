<?php
include_once 'conexion/conexionII.php';

$sentencia_select = $con->prepare('SELECT nombre, descripcion FROM libro');
$sentencia_select->execute();
$resultado = $sentencia_select->fetchAll();

// metodo buscar

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando otra conexion</title>
</head>

<body>
    <div class="contenedor">
        <h2>CRUD EN PHP CON MYSQL</h2>
        <div class="barra__buscador">
            <form action="" class="formulario" method="post">
                <input type="text" name="buscar" placeholder="buscar nombre o apellidos" value="<?php if (isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
                <input type="submit" class="btn" name="btn_buscar" value="Buscar">
                <a href="insert.php" class="btn btn__nuevo">Nuevo</a>
            </form>
        </div>
        <table>
            <tr class="head">
                <td>Id</td>
                <td>Nombre</td>
                <td colspan="2">Acción</td>
            </tr>
            <?php foreach ($resultado as $fila) : ?>
                <tr>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['descripcion']; ?></td>
                </tr>
            <?php endforeach ?>

        </table>
    </div>
</body>

</html>