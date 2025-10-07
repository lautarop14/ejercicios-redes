<?php

$objRenglon1 = new stdClass();
$objRenglon1->codArt        = "cp001";
$objRenglon1->descripcion   = "jaguel 800 gr";
$objRenglon1->precioUnitario= 30;  
$objRenglon1->cantidad      = 2;    

$objRenglon2 = new stdClass();
$objRenglon2->codArt        = "cp002";
$objRenglon2->descripcion   = "atun 800 gr";
$objRenglon2->precioUnitario= 24;
$objRenglon2->cantidad      = 3;

$renglonesPedido = [];
array_push($renglonesPedido, $objRenglon1);
array_push($renglonesPedido, $objRenglon2);

$cantidadRenglones = count($renglonesPedido);

$objRenglonesPedido = new stdClass();
$objRenglonesPedido->renglonesPedido = $renglonesPedido;
$objRenglonesPedido->cantidadDeRenglones = $cantidadRenglones;

$jsonRenglones = json_encode($objRenglonesPedido);

function h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Objetos: Renglones de pedido (PHP)</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

  <h1>Variables tipo objeto en PHP. Objeto renglón de pedido</h1>

  <h2 style="color: #0033cc;">$objRenglonPedido</h2>

  <!-- Muestra del primer objeto individual -->
  <p>Código de artículo: <?php echo h($objRenglon1->codArt); ?></p>
  <p>Descripción del artículo: <?php echo h($objRenglon1->descripcion); ?></p>
  <p>Precio unitario: <?php echo h($objRenglon1->precioUnitario); ?></p>
  <p>Cantidad: <?php echo h($objRenglon1->cantidad); ?></p>

  <h2>Tipo de <span style="color:#0033cc;">$objRenglonPedido</span>:
    <?php echo h(gettype($objRenglon1)); /* devuelve "object" */ ?>
  </h2>

  <h2>Definamos arreglo de pedidos:</h2>
  <h3 style="color:#0033cc;">$renglonesPedido</h3>

  <p>Tipo de <span style="color:#0033cc;">$renglonesPedido</span>:
    <?php echo h(gettype($renglonesPedido)); /* devuelve "array" */ ?>
  </p>

  <h2>Tabla $renglonesPedido. Recorrer el arreglo de renglones y tabularlos con HTML:</h2>

  <div class="tabla-renglones">
    <?php foreach ($renglonesPedido as $r): ?>
      <!-- imprimimos los atributos del objeto renglón -->
      <div class="renglon">
        <?php
          echo h($r->codArt) . " ";
          echo h($r->descripcion) . " ";
          echo h($r->precioUnitario) . " ";
          echo h($r->cantidad);
        ?>
      </div>
    <?php endforeach; ?>
  </div>

  <p><strong>Cantidad de renglones</strong>: <?php echo h($cantidadRenglones); ?></p>

  <h2>Producción de un objeto <span style="color:#0033cc;">$objRenglonesPedido</span>
  con dos atributos: array <em>renglonesPedido</em> y <em>cantidadDeRenglones</em></h2>

  <p>Cantidad de renglones: <?php echo h($objRenglonesPedido->cantidadDeRenglones); ?></p>

  <h2>Producción de un JSON <span style="color:#0033cc;">jsonRenglones</span>:</h2>

  <pre><?php echo h($jsonRenglones); ?></pre>


</body>
</html>
