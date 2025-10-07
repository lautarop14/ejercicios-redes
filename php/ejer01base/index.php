<!DOCTYPE html>

<html lang="es">
<head>
<meta charset="utf-8">
<title>Ejemplo PHP Parte 1</title>
<link rel="stylesheet" href="styles.php">
</head>
<body>

<p><strong>Esto es texto escrito fuera de las marcas de php. Es entregado en la respuesta http sin pasar por el preprocesador php</strong></p>
<hr>

<?php

// Texto generado por PHP
echo "<p>Texto entregado por el procesador php, usando la sentencia echo.</p>";

// VARIABLES
$A = "valor1";
$B = 2;
$C = 3;
$D = $B + $C;

echo "<p>El valor de \$A es: $A</p>";
echo "<p>El tipo de \$A es: " . gettype($A) . "</p>";

echo "<p>El valor de \$B es: $B</p>";
echo "<p>El tipo de \$B es: " . gettype($B) . "</p>";

echo "<p>El valor de \$C es: $C</p>";
echo "<p>El tipo de \$C es: " . gettype($C) . "</p>";

echo "<div class='banner'>La variable D es la suma de B + C</div>";

echo "<p>El valor de \$D es: $D</p>";
echo "<p>El tipo de \$D es: " . gettype($D) . "</p>";

// CONSTANTES
define("MICONSTANTE", "valorConstante");
echo "<p>El valor de la constante es: " . MICONSTANTE . "</p>";
echo "<p>El tipo de MICONSTANTE es: " . gettype(MICONSTANTE) . "</p>";

// ARRAYS
$aSaludo = ["hola", "hello"];
array_push($aSaludo, "ciao", "bonjour");

echo "<p>Arreglo de saludos en 4 idiomas:</p>";
foreach ($aSaludo as $saludo) {
    echo "<p>$saludo</p>";
}

// ARREGLO BIDIMENSIONAL
$aDiccionario = [
    ["hola", "hello", "ciao", "bonjour"],
    ["casa", "house", "casa", "maison"]
];

echo "<table border='1'>";
echo "<tr><th>Español</th><th>Inglés</th><th>Italiano</th><th>Francés</th></tr>";
foreach ($aDiccionario as $fila) {
    echo "<tr>";
    foreach ($fila as $palabra) {
        echo "<td>$palabra</td>";
    }
    echo "</tr>";
}
echo "</table>";

// ARREGLO ASOCIATIVO
$articulo = [
    "codigo" => "cp001",
    "descripcion" => "jaguel",
    "precio" => 20,
    "cantidad" => 2
];

echo "<p>Arreglo asociativo:</p>";
foreach ($articulo as $clave => $valor) {
    echo "<p>$clave: $valor</p>";
}
echo "<p>Cantidad de datos del arreglo: " . count($articulo) . "</p>";

// EXPRESIONES ARITMÉTICAS
$x = 3;
$y = 4;
echo "<hr>";
echo "<p>El valor de \$x es: $x</p>";
echo "<p>El valor de \$y es: $y</p>";
echo "<p>Suma: " . ($x + $y) . "</p>";
echo "<p>Multiplicación: " . ($x * $y) . "</p>";
echo "<p>División: " . ($x / $y) . "</p>";

// ALCANCE DE VARIABLES
$n1 = 40;
$n2 = 50;
echo "<hr>";
echo "<p>El valor de \$n1 es: $n1</p>";
echo "<p>El valor de \$n2 es: $n2</p>";
echo "<p>Suma en ámbito global: " . ($GLOBALS['n1'] + $GLOBALS['n2']) . "</p>";

function ejemploAlcance() {
    $n1 = 10;
    echo "<p>Dentro de la función, el valor de \$n1 es: $n1</p>";
}
ejemploAlcance();
?>

</body>
</html>
