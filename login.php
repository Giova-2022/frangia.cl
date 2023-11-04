<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de cliente</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>

    <?php include("Secciones/Header.php"); ?>
    <br>




    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya estas registrado?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3><b> <marquee behavior="" direction="">Registrate para tener una mejor atencion</b></marquee></h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="correo" placeholder="Correo Electronico">
                    <input type="contrasenia" placeholder="Contraseña">
                    <button class="btn">Entrar</button>
                </form>

                <!--Register-->
                <form action="" class="formulario__register">
                    <h2>Regístro de cliente</h2>
                    <input type="text" placeholder="Nombre completo">
                    <input type="text" placeholder="rut">
                    <input type="text" placeholder="Telefono">
                    <input type="text" placeholder="Direccion">
                    <input type="text" placeholder="comuna">
                    <input type="text" placeholder="Ciudad">

                    <br>
                    <h2>crea un usuario</h2>
                    <input type="text" placeholder="correo">
                    <input type="password" placeholder="Contraseña">
                    <button class="btn">Regístrarse</button>
                    <br>
                </form>
            </div>
        </div>


        <!-- footer-->
        <?php include("Secciones/Footer.php"); ?>

    </main>

    <script src="js/registro.js"></script>
</body>

</html>