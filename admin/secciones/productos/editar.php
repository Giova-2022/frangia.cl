<?php
include("../../conexion.php");

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";

    $sentencia = $conexion->prepare(" SELECT * FROM productos WHERE id=:id ");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    $categoria = $registro['categoria'];
    $titulo = $registro["titulo"];
    $impresion = $registro["impresion"];
    $cantidad = $registro["cantidad"];
    $tipodeimpresion = $registro["tipodeimpresion"];
    $papel = $registro["papel"];
    $reseller = $registro["reseller"];
    $precio = $registro["precio"];
    $btn = $registro["btn"];
    $link = $registro["link"];
}
if ($_POST) {

    // Recepcionamos los valores del formulario
    $txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
    $categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : "";
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
    $impresion = (isset($_POST['impresion'])) ? $_POST['impresion'] : "";
    $cantidad = (isset($_POST['cantidad'])) ? $_POST['cantidad'] : "";
    $tipodeimpresion = (isset($_POST['tipodeimpresion'])) ? $_POST['tipodeimpresion'] : "";
    $papel = (isset($_POST['papel'])) ? $_POST['papel'] : "";
    $reseller = (isset($_POST['reseller'])) ? $_POST['reseller'] : "";
    $precio = (isset($_POST['precio'])) ? $_POST['precio'] : "";
    $btn = (isset($_POST['btn'])) ? $_POST['btn'] : "";
    $link = (isset($_POST['link'])) ? $_POST['link'] : "";
    $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
    
    $sentencia = $conexion->prepare("UPDATE productos 
     SET 
     categoria=:categoria,
     titulo=:titulo,
     descripcion=:descripcion,
     impresion=:impresion,
     tipodeimpresion=:tipodeimpresion,
     papel=:papel,
     reseller=:reseller,
     precio=:precio,
     btn=:btn,
     link=:link
     WHERE id=:id ");

    $sentencia->bindParam(":categoria", $categoria);
    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":impresion", $impresion);
    $sentencia->bindParam(":cantidad", $cantidad);
    $sentencia->bindParam(":tipodeimpresion", $tipodeimpresion);
    $sentencia->bindParam(":papel", $papel);
    $sentencia->bindParam(":reseller", $reseller);
    $sentencia->bindParam(":precio", $precio);
    $sentencia->bindParam(":btn", $btn);
    $sentencia->bindParam(":link", $link);
    


    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();


    if ($_FILES["imagen"]["tmp_name"] != "") {

        $imagen = (isset($_FILES["imagen"]["name"])) ? $_FILES["imagen"]["name"] : "";
        $fecha_imagen = new DateTime();
        $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp() . "_" . $imagen : "";

        $tmp_imagen = $_FILES["imagen"]["tmp_name"];

        //Borrado del archivo anterior
        $sentencia = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id ");
        $sentencia->bindParam(":id", $txtID);
        $sentencia->execute();
        $registro_imagen = $sentencia->fetch(PDO::FETCH_LAZY);

        if (isset($registro_imagen["imagen"])) {
            if (file_exists("../../../assets/images/productos/" . $registro_imagen["imagen"])) {
                unlink("../../../assets/images/productos/" . $registro_imagen["imagen"]);
            }
        }
        $sentencia = $conexion->prepare("UPDATE productos SET imagen=:imagen WHERE id=:id ");
        $sentencia->bindParam(":imagen", $nombre_archivo_imagen);
        $sentencia->bindParam(":id", $txtID);
        $sentencia->execute();
    }

    $mensaje = "Registro modificado con éxito.";
    header("Location:index.php?mensaje=" . $mensaje);
}

include("../../templates/header.php");

?>


<div class="card">
    <div class="card-header">
        Producto del portafolio
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">


            <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input type="text" class="form-control" readonly name="txtID" id="txtID" value="<?php echo $txtID; ?>" aria-describedby="helpId" placeholder="">

            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">categoria:</label>
                <input type="text" class="form-control" value="<?php echo $categoria; ?>" name="categoria" id="categoria" aria-describedby="helpId" placeholder="categoria">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">titulo:</label>
                <input type="text" class="form-control" value="<?php echo $titulo; ?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder="titulo">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">impresion:</label>
                <input type="text" class="form-control" value="<?php echo $impresion; ?>" name="impresion" id="impresion" aria-describedby="helpId" placeholder="impresion">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">cantidad:</label>
                <input type="text" class="form-control" value="<?php echo $cantidad; ?>" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="cantidad">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">tipodeimpresion:</label>
                <input type="text" class="form-control" value="<?php echo $tipodeimpresion; ?>" name="tipodeimpresion" id="tipodeimpresion" aria-describedby="helpId" placeholder="tipodeimpresion">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">papel:</label>
                <input type="text" class="form-control" value="<?php echo $papel; ?>" name="papel" id="papel" aria-describedby="helpId" placeholder="papel">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">reseller:</label>
                <input type="text" class="form-control" value="<?php echo $reseller; ?>" name="reseller" id="reseller" aria-describedby="helpId" placeholder="reseller">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">precio:</label>
                <input type="text" class="form-control" value="<?php echo $precio; ?>" name="precio" id="precio" aria-describedby="helpId" placeholder="precio">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">btn:</label>
                <input type="text" class="form-control" value="<?php echo $btn; ?>" name="btn" id="btn" aria-describedby="helpId" placeholder="btn">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">link:</label>
                <input type="text" class="form-control" value="<?php echo $link; ?>" name="link" id="link" aria-describedby="helpId" placeholder="link">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <img width="50" src="../../../assets/images/productos/<?php echo $imagen; ?>" />
                <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" aria-describedby="fileHelpId">

            </div>

            <button type="submit" class="btn btn-success">Actualizar </button>

            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>



        </form>

    </div>
    <div class="card-footer text-muted">

    </div>
</div>





<?php include("../../templates/footer.php"); ?>