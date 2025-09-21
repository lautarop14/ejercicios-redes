const dataJSON = {

  "pedidos": [
    { "CodCliente": 1, "Nro_pedido": 1001, "Plazo_entrega": "2025-09-20", "Condiciones_pago": "Contado", "Moneda": "ARS", "Total_Neto_del_comprobante": 25000.50},
    { "CodCliente": 2, "Nro_pedido": 1002, "Plazo_entrega": "2025-09-22", "Condiciones_pago": "15 dias fijos", "Moneda": "USD", "Total_Neto_del_comprobante": 1200.00, "Pdf_comprobante": "" },
    { "CodCliente": 3, "Nro_pedido": 1003, "Plazo_entrega": "2025-09-25", "Condiciones_pago": "30 dias fijos", "Moneda": "ARS", "Total_Neto_del_comprobante": 78000.75, "Pdf_comprobante": "" },
    { "CodCliente": 4, "Nro_pedido": 1004, "Plazo_entrega": "2025-09-28", "Condiciones_pago": "Contado", "Moneda": "USD", "Total_Neto_del_comprobante": 3400.00, "Pdf_comprobante": "" },
    { "CodCliente": 5, "Nro_pedido": 1005, "Plazo_entrega": "2025-09-30", "Condiciones_pago": "15 dias fijos", "Moneda": "ARS", "Total_Neto_del_comprobante": 56000.00, "Pdf_comprobante": "" },
    { "CodCliente": 6, "Nro_pedido": 1006, "Plazo_entrega": "2025-10-02", "Condiciones_pago": "30 dias fijos", "Moneda": "USD", "Total_Neto_del_comprobante": 2500.00, "Pdf_comprobante": "" },
    { "CodCliente": 7, "Nro_pedido": 1007, "Plazo_entrega": "2025-10-05", "Condiciones_pago": "Contado", "Moneda": "ARS", "Total_Neto_del_comprobante": 98000.99, "Pdf_comprobante": "" },
    { "CodCliente": 8, "Nro_pedido": 1008, "Plazo_entrega": "2025-10-08", "Condiciones_pago": "15 dias fijos", "Moneda": "USD", "Total_Neto_del_comprobante": 1750.45, "Pdf_comprobante": "" },
    { "CodCliente": 9, "Nro_pedido": 1009, "Plazo_entrega": "2025-10-10", "Condiciones_pago": "30 dias fijos", "Moneda": "ARS", "Total_Neto_del_comprobante": 44200.00, "Pdf_comprobante": "" },
    { "CodCliente": 10, "Nro_pedido": 1010, "Plazo_entrega": "2025-10-12", "Condiciones_pago": "Contado", "Moneda": "USD", "Total_Neto_del_comprobante": 890.00, "Pdf_comprobante": "" }
]
};

const tbody = document.getElementById("tabla-body");
const btnCargar = document.getElementById("btnCargar");
const btnVaciar = document.getElementById("btnVaciar");

btnCargar.addEventListener("click", () => {
  tbody.innerHTML = ""; // limpio antes de cargar
  dataJSON.pedidos.forEach(art => {
    const fila = document.createElement("tr");
    fila.innerHTML = `
      <td>${art.CodCliente}</td>
      <td>${art.Nro_pedido}</td>
      <td>${art.Plazo_entrega}</td>
      <td>${art.Condiciones_pago}</td>
      <td>${art.Moneda}</td>
      <td>${art.Total_Neto_del_comprobante}</td>
    `;
    tbody.appendChild(fila);
  });
});

// Handler para vaciar datos
btnVaciar.addEventListener("click", () => {
  tbody.innerHTML = "";
});

