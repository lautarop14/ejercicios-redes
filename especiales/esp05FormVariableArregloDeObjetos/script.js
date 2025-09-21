const condicionesJSON = [
    {id: 1, detalle: "Contado" },
    {id: 2, detalle: "15 días fijos"},
    {id: 3, detalle: "30 días fijos"},
    {id: 4, detalle: "Transferencia bancaria"},
    {id: 5, detalle: "Tarjeta de crédito"}
];

document.addEventListener("DOMContentLoaded", () => {
    const selectCondiciones = document.getElementById("condiciones");

    condicionesJSON.forEach(f => {
        const option = document.createElement("option");
        option.value = f.id;
        option.textContent = f.detalle;
        selectCondiciones.appendChild(option);
    });

    const form = document.getElementById("clienteForm");
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        window.location.href = "exito.html";
    });
});

