<?php
function calcularPrecioFinal($precio, $iva = 0.19) {
    return $precio * (1 + $iva);
}

$inventario = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Teclado" => 45
];

echo "<h2>Precios con IVA incluido</h2>";
foreach ($inventario as $nombre => $precio) {
    $precioFinal = calcularPrecioFinal($precio);

    if ($precioFinal > 100) {
        echo "<p><strong style='color:red;'>$nombre: $precioFinal (Caro)</strong></p>";
    } else {
        echo "<p>$nombre: $precioFinal (Económico)</p>";
    }
}

function esMayorDeEdad($edad) {
    return $edad >= 18;
}

$edades = [12, 25, 17, 30, 15];

echo "<h2>Verificación de edades</h2>";
foreach ($edades as $edad) {
    if (esMayorDeEdad($edad)) {
        echo "<p>La persona con edad $edad es <strong>MAYOR</strong> de edad</p>";
    } else {
        echo "<p>La persona con edad $edad es <strong>MENOR</strong> de edad</p>";
    }
}
?>
