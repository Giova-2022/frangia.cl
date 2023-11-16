<?php
include("../../conexion.php");

if ($_POST) {





    // Recepcionamos los valores del formulario
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


    
    $fecha_imagen = new DateTime();
    $nombre_archivo_imagen = ($imagen != "") ? $fecha_imagen->getTimestamp()."_".$imagen : "";

    $tmp_imagen = $_FILES["imagen"]["tmp_name"];
    if ($tmp_imagen != "") {
        move_uploaded_file($tmp_imagen, "../../../assets/images/productos/".$nombre_archivo_imagen);
    }
    



    $sentencia = $conexion->prepare("INSERT INTO `productos`
    (`ID`, `categoria`, `titulo`, `impresion`, `cantidad`, `tipodeimpresion`, `papel`, `reseller`, `precio`, `btn`, `link`, `imagen`)
    VALUES (NULL, :categoria, :titulo, :impresion, :cantidad, :tipodeimpresion, :papel, :reseller, :precio, :btn, :link, :imagen);");

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
    $sentencia->bindParam(":imagen", $nombre_archivo_imagen);

    $sentencia->execute();
    $mensaje = " Producto agregado con éxito.";
    header("Location:index.php?mensaje=" . $mensaje);
}

include("../../templates/header.php");
?>


<div class="card">
    <div class="card-header">
        INGRESAR PRODUCTOS
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">



            <div class="mb-3">
                <label for="titulo" class="form-label">categoria:</label>
                <input type="text" class="form-control" name="categoria" id="categoria" aria-describedby="helpId" placeholder="categoria">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="titulo">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">impresion:</label>
                <input type="text" class="form-control" name="impresion" id="impresion" aria-describedby="helpId" placeholder="impresion">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">cantidad:</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="cantidad">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">tipodeimpresion:</label>
                <input type="text" class="form-control" name="tipodeimpresion" id="tipodeimpresion" aria-describedby="helpId" placeholder="tipodeimpresion">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">papel:</label>
                <input type="text" class="form-control" name="papel" id="papel" aria-describedby="helpId" placeholder="papel">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">reseller:</label>
                <input type="text" class="form-control" name="reseller" id="reseller" aria-describedby="helpId" placeholder="reseller">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">precio:</label>
                <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="precio">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">btn:</label>
                <input type="text" class="form-control" name="btn" id="btn" aria-describedby="helpId" placeholder="btn">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">link:</label>
                <input type="text" class="form-control" name="link" id="link" aria-describedby="helpId" placeholder="link del boton">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" aria-describedby="fileHelpId">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>

    </div>
    <div class="card-footer text-muted">

    </div>
</div>



<?php include("../../templates/footer.php"); ?>