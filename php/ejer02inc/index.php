<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Ejemplo include() - index.php</title>
</head>
<body>

<h1>Se utilizará la función include() que ubica código php definido en otro archivo <em>asignaciones.php</em> :</h1>

<p><strong>Antes de insertar el include las variables declaradas en el mismo no existen</strong></p>
<p><strong>Pero a pesar de ello el ciclo de ejecución continuará hasta el final</strong></p>

<p><strong>Las variables son:</strong></p>

<?php echo $arreglo1['Nombre']; ?></td>
<?php echo $arreglo1['Apellido']; ?></td>
<?php echo $arreglo1['Anio']; ?></td>

<?php echo $arreglo2['Nombre']; ?></td>
<?php echo $arreglo2['Apellido']; ?></td>
<?php echo $arreglo2['Anio']; ?></td>


<?php
echo "<p>En este punto se ejecuta la función <strong>include()</strong>. Cuando se usa <code>include</code> ocurre que si el archivo asociado no existe, se visualiza un warning y el script sigue ejecutándose hasta el final.</p>";

include 'asignaciones.php'; 
?>

<h2>Las 2 variables de tipo array asociativo en el archivo asociado son:</h2>

<table>
    <tr>
        <td><?php echo $arreglo1['Nombre']; ?></td>
        <td><?php echo $arreglo1['Apellido']; ?></td>
        <td><?php echo $arreglo1['Anio']; ?></td>
    </tr>
    <tr>
        <td><?php echo $arreglo2['Nombre']; ?></td>
        <td><?php echo $arreglo2['Apellido']; ?></td>
        <td><?php echo $arreglo2['Anio']; ?></td>
    </tr>
</table>

<p>La longitud del arreglo1 es : <?php echo count($arreglo1); ?></p>
<p>La longitud del arreglo2 es : <?php echo count($arreglo2); ?></p>

</body>
</html>
