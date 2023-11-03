Swal.fire({
    title: '<span class="blanco">Estoy para ayudarte!</span>',
    html: '<a href="https://wa.me/56936384308" class="boton__cotizar" target="_blank">contactar</a>',
    text: "Recuerda que nuestra pagina la estamos construyendo de apoco, cualquier sugerencia puedes escribirno",
    icon: undefined,
    input: '',
    footer: '<span class="blanco">frangia.cl</span>',
    width: '250px',
    
    padding: '1rem',
    background: 'linear-gradient(122deg, rgba(2,0,36,1) 0%, rgba(82,9,121,1) 39%, rgba(0,0,0,1) 100%)',
    grow: false,
    backdrop: false,
    timer: 7000,
    timerProgressBar: true,
    toast: false,
    position: 'bottom-start',  //bottom-start
    allowEscapeKey: false,
    stopKeydownPropagation: false,

    showConfirmButton: false,
    showCancelButton: false,
    showCloseButton: false,
    
    imageUrl:'././images/productos/cotizacion.png',
    imageWidth: '120%',
    imageHeight: '80%',
    imageAlt: 'calendario Magnetico'

})