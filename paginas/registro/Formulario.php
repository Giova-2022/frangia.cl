<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de cliente</title>
    <link rel="icon" type="image/x-icon" href="../../favicon.ico">
    <link rel="stylesheet" href="registro.css">

</head>

<body>


    <form method="post">

        <h2>FORMULARIO DE REGISTRO</h2>
        <h6>los datos proporcionados son exclusivamente para llevar un mejor control con tus ordenes de trabajo y poder realizar una <b>mejor atencion</p>


                <div class="input-wrapper">
                    <input type="text" name="name" placeholder="Nombre:">
                    <img class="input-icon" src="../../images/name.svg" alt="">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="apellido" placeholder="Apellido:">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="rut" placeholder="Rut:">
                </div>
                <br>
                <hr>
                <div class="input-wrapper">
                    <input type="text" name="direccion" placeholder="Direccion:">
                    <img class="input-icon" src="../../images/direction.svg" alt="">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="comuna" placeholder="Comuna:">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="ciudad" placeholder="Ciudad:">
                </div>
                <br>
                <hr>
                <div class="input-wrapper">
                    <input type="tel" name="telefono" placeholder="Telefono:">
                    <img class="input-icon" src="../../images/phone.svg" alt="">
                </div>
                <div class="input-wrapper">
                    <input type="email" name="correo" placeholder="Correo:">
                    <img class="input-icon" src="../../images/email.svg" alt="">
                </div>

                <input class="btn" type="submit" name="register" value="Enviar">


                <br>
                <span class="span_form">Cualquier duda o consulta escribenos Haz <a href="https://wa.me/56936384308" target="_blank"><b>Clik!</b></span></a>
    </form>


    <?php include("registrar.php") ?>





</body>



</html>