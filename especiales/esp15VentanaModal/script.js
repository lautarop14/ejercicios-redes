window.onload = function () {
    alert("Ancho de ventana: " + window.innerWidth);
    // mostrar el contenido después de aceptar la alerta
    document.getElementById("contenedorGlobal").classList.remove("oculto");
};
  
const btnAbrir = document.getElementById("abrirModal");
const modal = document.getElementById("modal");
const cerrar = document.getElementById("cerrarModal");
const contenedor = document.getElementById("contenedorGlobal");
const iframe = document.getElementById("modalIframe");
  
// ruta relativa hacia el formulario
const srcIframe = "../esp05FormVariableArregloDeObjetos/index.html";
  
btnAbrir.addEventListener("click", () => {
    contenedor.classList.add("deshabilitado");
    iframe.src = srcIframe;
    modal.classList.add("show");
    modal.setAttribute("aria-hidden", "false");
});
  
cerrar.addEventListener("click", closeModal);
  
modal.addEventListener("click", (e) => {
    if (e.target === modal) closeModal();
});
  
function closeModal() {
    modal.classList.remove("show");
    modal.setAttribute("aria-hidden", "true");
    contenedor.classList.remove("deshabilitado");
    iframe.src = ""; // limpia el iframe al cerrar
}