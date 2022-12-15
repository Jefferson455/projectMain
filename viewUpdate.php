<?php
include('conexion/conexion.php');
$id = $_GET['id'];
$query = "SELECT libro.idlibro, libro.nombre, libro.descripcion, libro.fk_idUsuarios, usuarios.nombre AS escrito_por 
              FROM libro 
              INNER JOIN usuarios 
              ON libro.fk_idUsuarios = usuarios.idusuarios 
              WHERE libro.idlibro = '$id'";

$queryII = "SELECT idusuarios, nombre AS nameUser FROM usuarios";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-tables.css">
    <link rel="stylesheet" href="css/style-modal.css">
    <link rel="icon" type="image/jpg" href="img/heartII.png" />
    <script src="https://kit.fontawesome.com/83c4baed2e.js" crossorigin="anonymous"></script>
    <title>Update</title>
</head>

<body>
    <header>
        <div class="container logo-nav-container">
            <a href="home.html  " class="logo"></a>
            <span class="span-menu-icon">Ver menú</span>
            <nav class="nav">
                <ul class="menu" id="menu">
                    <li><a href="menu.php">💀Inicio</a></li>
                    <li><a href="multimedia.html">🎸Multimedia</a></li>
                    <li><a href="parati.php">🤟Para ti</a></li>
                    <li><a href="dedicatoria.html">🌹Dedicatoria</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="container" id="phrase">
            <h1>Editando mi libro</h1>
            <form action="update.php" method="post">
                <div class="container_table_update">
                    <?php $libro = mysqli_query($conexion, $query);
                    while ($row = mysqli_fetch_assoc($libro)) { ?>
                        <input type="hidden" value="<?php echo $row["idlibro"] ?>" name="idlibro">
                        <p>Nombre del libro</p>
                        <input type="text" class="input_table" value="<?php echo $row["nombre"] ?>" name="nombre">
                        <p>Descripcion</p>
                        <input type="text" class="input_table" value="<?php echo $row["descripcion"] ?>" name="descripcion"><br>

                    <?php }
                    mysqli_free_result($libro);
                    ?>
                    <p>Autor </p>
                    <select id="" name="idusuarios" class="input_table">
                        <?php
                        $libroII = mysqli_query($conexion, $queryII);
                        while ($row = mysqli_fetch_assoc($libroII)) { ?>
                            <option value="<?php echo $row["idusuarios"] ?>"> <?php echo $row["nameUser"] ?></option>
                        <?php }
                        mysqli_free_result($libroII);
                        ?>
                    </select>
                    <div class="btn_group">
                        <a href="parati.php" class="act">Cancelar</a>
                        <input type="submit" Value="Actualizar" class="act">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="js/navMenu.js"></script>
</body>
<footer class="footer">
    <div class="container">
        <p>☠️Made for you❤️</p>
    </div>
</footer>
</body>

</html>