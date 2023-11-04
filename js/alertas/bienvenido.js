// Obtiene los elementos HTML de los encabezados
const titulo = document.querySelector('#cover_titulo');
const subtitulo = document.querySelector('#cover_subtitulo');
const accion = document.querySelector('#cover_accion');

// Define las posiciones iniciales de los encabezados
titulo.style.left = '-100vw';
subtitulo.style.top = '-100vh';
accion.style.right = '-100vw';

// Define las posiciones finales de los encabezados
titulo.style.left = '0';
subtitulo.style.top = '0';
accion.style.right = '0';

// Inicia la animación
const animacion = anime({
  targets: [titulo, subtitulo, accion],
  duration: 2000,
  easing: 'easeInOutQuad',
  delay: (i) => (i + 1) * 100,
  keyframes: {
    0: {
      opacity: 0,
      transform: `translate(${titulo.style.left}, ${titulo.style.top})`,
    },
    1: {
      opacity: 1,
      transform: `translate(0, 0)`,
    },
  },
});