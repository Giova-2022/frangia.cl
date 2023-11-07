/* Formulario de registro de clientes*/

<?php 
    include("conexion.php");
    $conex = mysqli_connect("localhost", "root", "", "Frangia.cl");

    if (isset($_POST['register'])){
        if (
                strlen($_POST['name']) >= 1 &&
                strlen($_POST['apellido']) >= 1 &&
                strlen($_POST['rut']) >= 1 &&
                strlen($_POST['direccion']) >= 1 &&
                strlen($_POST['comuna']) >= 1 &&
                strlen($_POST['ciudad']) >= 1 &&
                strlen($_POST['telefono']) >= 1 &&
                strlen($_POST['correo']) >= 1 &&
            ){
                    $fecha = date("d/m/y");
                    $name = trim($_POST['name']);
                    $apellido = trim($_POST['apellido']);
                    $rut = trim($_POST['rut']);
                    $direccion = trim($_POST['direccion']);
                    $comuna = trim($_POST['comuna']);
                    $ciudad = trim($_POST['ciudad']);
                    $telefono = trim($_POST['telefono']);
                    $correo = trim($_POST['correo']);
                    $consulta = "INSERT INTO `clientes`(`ingreso`, `nombre`, `apellido`, `direccion`, `comuna`, `ciudad`, `telefono`, `correo`)
                                      VALUES ('$fecha','$name','$apellido','$rut','$direccion','$comuna','$ciudad','$telefono','$correo')";


            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
            ?>
             <h3 class="success"> Tu registro fue realizado con exito</h3>
            <?php
            }else{
                <h3 class="error">Ocurrio un error</h3>
            }
           } else{
                <h3 class="error">UP! debes llenar todos los campos</h3>
            }

    }
    
?>
