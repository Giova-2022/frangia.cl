<?php foreach ($lista_portfolio as $registros) { ?>
   
   
   
   <!-- Insertar Aquí contenido -->
    <div class="contenedor">
        <div class="titulo">
            <div class="shape right-skew">
                
                <h2> <marquee behavior="" direction="">🚀 CALENDARIOS ⭐ FLYERS ⭐ TARJETAS ⭐ LETREROS 🚀</marquee></h2>
            </div>
            <span class="txt-titulo">Mostrando 4 de 6 elementos</span>
        </div>
        <div class="slider carousel">

            <!-- Magnetico + Mini Taco 100 und -->
            <div class="producto item">
                <div class="contenedor-imagen">
                    <a href="#" class="link"></a>
                    <img src="../assets/images/productos/ <?php echo $registros["imagen"]; ?>" alt="calendario magnetico">
                      <!-- Imagen de producto para hover 
                    <img src="images/productos/magnetico.png" class="img-hover"> -->
                </div>

                <div class="datos">
                    <div class="starrr"></div>
                    <small><a href="#"><?php echo $registros["titulo"]; ?></a></small>
                    <h3><a href="#"><?php echo $registros["cetegoria"]; ?></a></h3>
                    <small>Cantidad: <?php echo $registros["cantidad"]; ?></small> <br>
                    <small>Impresion:<?php echo $registros["tipodeimpresion"]; ?></small> <br>
                    <small>Papel: <?php echo $registros["papel"]; ?></small>
                </div>
                <div class="precios">
                    <div class="internet">
                        <small class="reseller">RESELLER</small>
                        <span><?php echo $registros["reseller"]; ?></span>
                    </div>
                    <div class="normal">
                        <small>NORMAL</small>
                        <span><?php echo $registros["precio"]; ?></span>
                    </div>
                </div>
                <a href="<?php echo $registros["link"]; ?>" class="btn-carrito"><i class="fas fa-shopping-basket"></i><?php echo $registros["btn"]; ?></a>
            </div>
             


        </div>
    </div>
    <?php } ?>
    