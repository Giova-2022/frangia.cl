<?php
include("../../conexion.php");

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";
    $sentencia = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id ");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);
    if (isset($registro_imagen["imagen"])) {
        if (file_exists("../../../assets/images/productos/" . $registro_imagen["imagen"])) {
            unlink("../../../assets/images/productos/" . $registro_imagen["imagen"]);
        }
    }
    $sentencia = $conexion->prepare("DELETE FROM productos WHERE id=:id ");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
}


// seleccionar registros
$sentencia = $conexion->prepare("SELECT * FROM `productos`");
$sentencia->execute();
$lista_producto = $sentencia->fetchAll(PDO::FETCH_ASSOC);


include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Impresion</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Tipo de Impresion</th>
                        <th scope="col">Papel</th>
                        <th scope="col">Reseller</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Nombre del boton</th>
                        <th scope="col">Links</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones </th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($lista_producto as $registros) { ?>

                        <tr class="">
                            <td scope="row"><?php echo $registros['ID']; ?></td>
                            <td> <?php echo $registros['categoria']; ?></td>
                            <td> <?php echo $registros['titulo'];    ?></td>
                            <td> <?php echo $registros['impresion']; ?></td>
                            <td> <?php echo $registros['cantidad'];    ?></td>
                            <td> <?php echo $registros['tipodeimpresion']; ?></td>
                            <td> <?php echo $registros['papel'];    ?></td>
                            <td> <?php echo $registros['reseller']; ?></td>
                            <td> <?php echo $registros['precio'];    ?></td>
                            <td> <?php echo $registros['btn']; ?></td>
                            <td> <?php echo $registros['link'];    ?></td>
                            <td scope="col">
                                <img width="50" src="../../../assets/images/productos/<?php echo $registros['imagen']; ?>" />
                            </td>

                            <td scope="col">
                                <a name="" id="" class="btn btn-info" href="editar.php?txtID=<?php echo $registros['ID']; ?>" role="button">Editar</a>|
                                <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registros['ID']; ?>" role="button">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <div class="card-footer text-muted">

    </div>

</div>

<?php include("../../templates/footer.php"); ?>