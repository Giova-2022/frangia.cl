<!-- Formulario de registro de clientes-->

<?php

// Conexión a la base de datos
include("conexion.php");

// Validación de datos
if (isset($_POST['register'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['rut']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['comuna']) >= 1 &&
        strlen($_POST['ciudad']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['correo']) >= 1
    ) {

        // Asignación de variables
        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $rut = trim($_POST['rut']);
        $direccion = trim($_POST['direccion']);
        $comuna = trim($_POST['comuna']);
        $ciudad = trim($_POST['ciudad']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $ingreso = date("d/m/y");


            // Inserción de datos
        $consulta = "INSERT INTO clientes (nombre, apellido, rut, direccion, comuna, ciudad, telefono, correo, ingreso)
        VALUES (null,'$name','$apellido','$rut','$direccion','$comuna','$ciudad','$telefono','$correo','$ingreso')";

        $resultado = mysqli_query($db, $consulta);

        // Verificación de resultado
        if ($resultado) {
            // Registro exitoso
            $mensaje = "🎉Tu registro fue realizado con éxito";
        } else {
            // Error al registrar
            $mensaje = "😭 <b>Up!</b> Error al registrar";
        }
    } else {
        // Campos vacíos
        $mensaje = "📌 Recuerda llenar todos los campos";
    }
} else {
    // No se ha enviado el formulario
    $mensaje = "";
}
?>

<div class="mensaje">

<?php echo $mensaje;?>

</div>


