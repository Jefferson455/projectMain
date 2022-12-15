<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleslogin.css">
    <title>Login y registro</title>
</head>

<body>
    <main>
        <div class="container__principal">
            <div class="box__back">
                <div class="box__back-login">
                    <h3>Ya tienes una cuenta?</h3>
                    <p>Inicia sesión</p>
                    <button id="btn__log-in">Iniciar Sesión</button>
                </div>
                <div class="box__back-register">
                    <h3>Registrado?</h3>
                    <p>Registrate ahora</p>
                    <button id="btn__register">Registrarse</button>
                </div>
            </div>
            <div class="container__login-register">
                <!--Formulario de login-->
                <form action="" class="formulario__login">
                    <h2>iniciar sesión</h2>
                    <input type="text" placeholder="correo electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>entrar</button>
                </form>

                <!--Formulario de registro-->
                <form action="insertUser.php" class="formulario__register">
                    <h2>registrarse</h2>
                    <input name="nombre" type="text" placeholder="Nombre" required="">
                    <input name="usuario" type="text" placeholder="Usuario" required>
                    <input name="password" type="password" placeholder="Contraseña" required>
                    <button type="submit">Registrarse</button>
                </form>
            </div>

        </div>
    </main>
    <script src="js/login.js"></script>
</body>

</html>