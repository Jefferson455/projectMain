<?php
    include ('conexion/conexion.php');
    $query = "SELECT libro.nombre, libro.descripcion, usuarios.nombre AS escrito_por 
    FROM libro 
    INNER JOIN usuarios 
    ON libro.fk_idUsuarios = usuarios.idusuarios";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Book</title>
    </head>

    <body>
        <div class="container">
            <h1>
                hola aqui se va a cargar la vista de la descripcion
                <?php $libro = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_assoc($libro)) { ?>
                    <tr>
                        <h1 class="tname"><?php echo $row["nombre"] ?></td>
                        <h1><?php echo $row["descripcion"] ?></td>
                    </tr>

                <?php }
                mysqli_free_result($libro) ?>
            </h1>

        </div>
    </body>

    </html>