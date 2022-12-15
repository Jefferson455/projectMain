<?php
include('conexion/conexion.php');
$query = "SELECT * FROM frases ORDER BY rand() LIMIT 1";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-navbar.css">
    <link rel="icon" type="image/jpg" href="img/heartII.png" />
    <title>Inicio</title>
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
            <h1>Bienvenida al inicio</h1>
            <div class="frase_inicio">
                <?php $frase = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_assoc($frase)) { ?>
                    <p>~ <?php echo $row["name"] ?> ~</p>
                <?php }
                mysqli_free_result($frase) ?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/navMenu.js"></script>
    <script src="js/queryinterval.js"></script>
</body>
<footer class="footer">
    <div class="container">
        <p>☠️Made for you ❤️</p>
    </div>
</footer>

</html>