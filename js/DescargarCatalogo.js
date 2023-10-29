const button = document.querySelector("input[data-href='catalogos/catalogo2024.pdf']");
button.addEventListener("click", () => {
  // Descarga el archivo
  const xhr = new XMLHttpRequest();
  xhr.open("GET", button.dataset.href);
  xhr.responseType = "blob";
  xhr.onload = () => {
    // Obtiene el archivo descargado
    const blob = xhr.response;
    // Guarda el archivo en el disco
    const a = document.createElement("a");
    a.href = window.URL.createObjectURL(blob);
    a.download = "catalogo2024.pdf";
    a.click();

    // Muestra la alerta
  setTimeout(() => {
    alert("Gracias!... El catálogo se descargó con éxito.");
  }, 1000);
  };
  xhr.send();
});