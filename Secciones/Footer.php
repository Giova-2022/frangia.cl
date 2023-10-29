

        <!-- NO TOCAR ÉSTE CÓDIGO...> AQUÍ TE DEJO EL TUTORIAL PARA QUE HAGAS ESTE CÓDIGO:
        https://youtu.be/0V1Bs5nV6uo -->

        <Footer>
            <div class="container__footer">

                <div class="box__footer">
                    <div class="logo">
                        <img src="assets/images/Logo/logo2024-GRIS.png" alt="">
                    </div>
                    <div class="terms">
                       <p>Tu aliado para la impresión

                        Somos una empresa especializada en la impresión de todo tipo de productos, desde calendarios y tarjetas hasta flyers y letreros.
                        
                        Nos apasiona ayudar a nuestros clientes a crear una marca sólida y memorable.</p>
                    </div>
                </div>

                <div class="box__footer">
                    <h2>Soluciones</h2>
                    <a href="">Diseño Grafico</a>
                    <a href="https://wa.me/c/56936384308">Productos</a>
                    <a href="ventas@frangia.cl">Cotizaciones</a>
                    <a href="https://wa.me/56936384308">Agente</a>
                </div>
<!--
                <div class="box__footer">
                    <h2>Compañia</h2>
                    <a href="">Acerca de</a>
                    <a href="#">Trabajos</a>
                    <a href="#">Procesos</a>
                    <a href="#">Servicios</a>              
                </div> -->

                <div class="box__footer">
                    <h2>Redes Sociales</h2>
                    <a href="https://m.facebook.com/Frangia.cl"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a href="https://www.instagram.com/impresiones_frangia"><i class="fab fa-instagram-square"></i> Instagram</a>
                    <br>
                    <a href="https://wa.me/56936384308"><i class="fab fa-whatsapp-square"></i> Whatsapp</a>                    
                </div>
            </div>

            <div class="box__copyright">
                <hr>
                <p>Todos los derechos reservados © 2023 <br> <b>Impresiones Frangia</b></p>
            </div>
        </Footer>

</div>

    <script src="js/script.js"></script>
    <script src="js/DescargarCatalogo.js"></script>




    
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<!-- Carousel -->
<script src="js/slickslider/slick.min.js"></script>
<!-- Starrr -->
<script src="js/starrr.js"></script>
<script type="text/javascript">
    //Starrr
    $('.starrr').starrr({})

    $('.carousel').slick({
        dots: false,
        infinite: false,
        speed: 300,
        draggable: false,
        slidesToShow: 4,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, ]
    });
</script>
</body>
</html>