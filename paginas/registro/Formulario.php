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


    <form action="" method="post">

        <h2>Formulario de Registro</h2>
        <small>los datos proporcionados son exclusivamente para llevar un mejor control con tus ordenes de trabajo y poder realizar una <b>mejor atencion</p>

        <!-- ingreso de nombre-->
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre:">
            <img class="input-icon" src="../../images/name.svg" alt="">
        </div>
        <!-- ingreso de apellido-->
        <div class="input-wrapper">
            <input type="text" name="apellido" placeholder="Apellido:">
        </div>
        <!-- ingreso de rut-->
        <div class="input-wrapper">
            <input type="text" name="rut" placeholder="Rut:">
        </div>
        <br>
        <hr>
          <!-- ingreso de direccion-->
          <div class="input-wrapper">
            <input type="text" name="direccion" placeholder="Direccion:">
            <img class="input-icon" src="../../images/direction.svg" alt="">
        </div>
        <!-- ingreso de comuna-->
        <div class="input-wrapper">
            <input type="text" name="comuna" placeholder="Comuna:">
        </div>
        <!-- ingreso de ciudad-->
        <div class="input-wrapper">
            <input type="text" name="ciudad" placeholder="Ciudad:">
        </div>
        <br>
        <hr>
        <!-- ingreso de telefono-->
        <div class="input-wrapper">
            <input type="tel" name="telefono" placeholder="Telefono:">
            <img class="input-icon" src="../../images/phone.svg" alt="">
        </div>
        <!-- ingreso de correo-->
        <div class="input-wrapper">
            <input type="email" name="correo" placeholder="Correo:">
            <img class="input-icon" src="../../images/email.svg" alt="">
        </div>
        

        <input class="btn" type="submit" name="Registar" value="enviar">
</form>


<?php include("registrar.php") ?>





</body>



</html>