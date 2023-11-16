<?php
// seleccionar registros de portafolio
$sentencia=$conexion->prepare("SELECT * FROM `productos`");
$sentencia->execute();
$lista_portfolio=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("Secciones/Header.php");?>

<?php include("Secciones/Cover.php");?>


<?php include("Secciones/carrusel.php");?>





<?php include("Secciones/Footer.php");?>