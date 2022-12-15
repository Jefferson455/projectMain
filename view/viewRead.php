<?php
include('../conexion/conexion.php');
$id = $_GET['id'];
$query = "SELECT libro.idlibro, libro.nombre, libro.descripcion, libro.fk_idUsuarios, usuarios.nombre AS escrito_por 
              FROM libro 
              INNER JOIN usuarios 
              ON libro.fk_idUsuarios = usuarios.idusuarios 
              WHERE libro.idlibro = '$id'";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-tables.css">
    <link rel="stylesheet" href="../css/style-modal.css">
    <link rel="icon" type="image/jpg" href="../img/heartII.png" />
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
            <?php $libro = mysqli_query($conexion, $query);
            while ($row = mysqli_fetch_assoc($libro)) { ?>
                <h1>Libro N° <?php echo $row["idlibro"] ?></h1>
                <form action="update.php" method="post">
                    <div class="container_table_read">
                        <p>Nombre del libro</p>
                        <h2 class="input_table_read"><?php echo $row["nombre"] ?></h2>
                        <p>Descripcion</p>
                        <p class="input_table_read"> <?php echo $row["descripcion"] ?></p><br>

                    <?php }
                mysqli_free_result($libro);
                    ?>
                    <div class="btn_group">
                        <a href="../parati.php" class="btn_read_cancel">Atrás</a>
                    </div>
                    </div>
                </form>
        </div>
    </main>
    <script src="../js/navMenu.js"></script>
</body>
<footer class="footer">
    <div class="container">
        <p>☠️Made for you❤️</p>
    </div>
</footer>
</body>

</html>