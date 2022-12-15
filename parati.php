<?php
include('conexion/conexion.php');
$query = "SELECT libro.idlibro, libro.nombre, libro.descripcion, usuarios.nombre AS escrito_por 
              FROM libro 
              INNER JOIN usuarios 
              ON libro.fk_idUsuarios = usuarios.idusuarios";
$queryII = "SELECT idusuarios FROM usuarios ORDER BY rand() LIMIT 1;";

$id = $_GET['id'];
$delete = "DELETE FROM libro
              WHERE libro.idlibro = '$id'";
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
    <title>Para ti</title>
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
            <h1>Mi libro</h1>
            <a href="#" class="cta">Nuevo</a>
            <div class="table_container">
                <table class="milibro">
                    <tr>
                        <th class="tname">Libro</th>
                        <th class="tdescripcion">Descripcion</th>
                        <th class="tname">Escrito por</th>
                        <th class="tname">Opciones</th>
                    </tr>
                    <?php $libro = mysqli_query($conexion, $query);
                    while ($row = mysqli_fetch_assoc($libro)) { ?>
                        <tr>
                            <td class="tname"><?php echo $row["nombre"] ?></td>
                            <td><?php echo $row["descripcion"] ?></td>
                            <td class="tname"><?php echo $row["escrito_por"] ?></td>
                            <td class="tname">
                                <a href="viewRead.php?id=<?php echo $row["idlibro"]; ?>" class="a_eye"><i class="far fa-eye"></i></i></a>
                                <a href="viewUpdate.php?id=<?php echo $row["idlibro"]; ?>" class="a_pencil"><i class="far fa-edit"></i></i></i></a>
                                <a href="delete.php?id=<?php echo $row["idlibro"]; ?>" class="a_trash"><i class="far fa-trash-alt"></i></i></a>
                            </td>

                        </tr>

                    <?php }
                    mysqli_free_result($libro) ?>
                </table>
            </div>

        </div>
        <!-- MODAL PARA AGREGAR DATOS-->
        <div class="modal-container">
            <div class="modal modal-close">
                <p class="close">x</p>
                <div class="modal-textos">
                    <form action="insertar.php" method="post">
                        <h1>Añade un nuevo libro <i class="fas fa-book-dead"></i></h1>
                        <p>Nombre del libro:</p>
                        <input type="text" name="nombre" placeholder="" class="input_modal" required><br>
                        <p>Descripcion del libro:</p>
                        <textarea name="descripcion" rows="10" cols="60" class="input_modal" placeholder="" required></textarea>
                        <?php
                        $iduser = mysqli_query($conexion, $queryII);
                        while ($row = mysqli_fetch_assoc($iduser)) {
                        ?>
                            <input type="hidden" name="fk_idUsuarios" value=<?php echo $row["idusuarios"] ?> class="">
                        <?php }
                        mysqli_free_result($iduser) ?>
                        <div class="btn_group">
                            <a href="parati.php" class="btns">Cancelar</a>
                            <input type="submit" name="guardar" value="Agregar" class="btns">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal Read -->
        <div class="modal-container">
            <div class="modal modal-close">
                <p class="close">x</p>
                <div class="modal-textos">
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
                                    <a href="parati.php" class="btn_read_cancel">Atrás</a>
                                </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/navMenu.js"></script>
    <script src="js/modalNew.js"></script>
    <script src="js/modalRead.js"></script>
    <script src="js/confirmDelete.js"></script>
</body>
<footer class="footer">
    <div class="container">
        <p>☠️Made for you❤️</p>
    </div>
</footer>

</html>