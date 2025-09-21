const btnCargar = document.getElementById('btnCargar');
const btnVaciar = document.getElementById('btnVaciar');
const btnForm = document.getElementById('btnForm');
const tablaBody = document.querySelector('#tablaPedidos tbody');
const modal = document.getElementById('modalForm');
const cerrarModal = document.getElementById('cerrarModal');

const datosJSON = `{
    "pedidos": [
        {"CodCliente":"1","NroPedido":"1001","PlazoEntrega":"2025-09-20","Descripcion":"Contado","Moneda": "ARS","TotalNeto":25000.50},
        {"CodCliente":"2","NroPedido":"1002","PlazoEntrega":"2025-09-22","Descripcion":"15 días fijos","Moneda": "USD","TotalNeto":1200.00},
        {"CodCliente":"3","NroPedido":"1003","PlazoEntrega":"2025-09-25","Descripcion":"30 días fijos","Moneda": "ARS","TotalNeto":78000.75},
        {"CodCliente":"4","NroPedido":"1004","PlazoEntrega":"2025-09-26","Descripcion":"Contado","Moneda": "USD","TotalNeto": 3400.00},
        {"CodCliente":"5","NroPedido":"1005","PlazoEntrega":"2025-09-30","Descripcion":"15 días fijos","Moneda": "ARS","TotalNeto":56000.00},
        {"CodCliente":"6","NroPedido":"1006","PlazoEntrega":"2025-10-01","Descripcion":"30 días fijos","Moneda": "USD","TotalNeto":2500.00},
        {"CodCliente":"7","NroPedido":"1007","PlazoEntrega":"2025-10-02","Descripcion":"Contado","Moneda": "ARS","TotalNeto":98000.99},
        {"CodCliente":"8","NroPedido":"1008","PlazoEntrega":"2025-10-05","Descripcion":"15 días fijos","Moneda": "USD","TotalNeto":1750.45},
        {"CodCliente":"9","NroPedido":"1009","PlazoEntrega":"2025-10-10","Descripcion":"30 días fijos","Moneda": "ARS","TotalNeto":34200.00},
        {"CodCliente":"10","NroPedido":"1010","PlazoEntrega":"2025-10-15","Descripcion":"Contado","Moneda": "USD","TotalNeto":890.00}      
    ]
}`;
const datos = JSON.parse(datosJSON);

// Función para renderizar filas
function cargarDatos() {
    tablaBody.innerHTML = "";
    datos.pedidos.forEach(art => {
        const fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${art.CodCliente}</td>
            <td>${art.NroPedido}</td>
            <td>${art.PlazoEntrega}</td>
            <td>${art.Descripcion}</td>
            <td>${art.Moneda}</td>
            <td>${art.TotalNeto}</td>
        `;
        tablaBody.appendChild(fila);
    });
}

// Función para vaciar la tabla
function vaciarDatos() {
    tablaBody.innerHTML = "";
}

// Función para abrir el modal
function abrirForm() {
    modal.style.display = 'flex';
    deshabilitarBotones(true);
}

// Función para cerrar el modal
function cerrarForm() {
    modal.style.display = 'none';
    deshabilitarBotones(false);
}

// Habilita/deshabilita botones
function deshabilitarBotones(estado) {
    btnCargar.disabled = estado;
    btnVaciar.disabled = estado;
    btnForm.disabled = estado;
}

// Eventos
btnCargar.addEventListener('click', cargarDatos);
btnVaciar.addEventListener('click', vaciarDatos);
btnForm.addEventListener('click', abrirForm);
cerrarModal.addEventListener('click', cerrarForm);
modal.addEventListener('click', (e) => {
    if (e.target === modal) cerrarForm();
});





