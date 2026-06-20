<?php
require_once 'producto.php';

$prod1 = new Producto("Laptop Gamer", 1500, "Electrónica");
$prod2 = new Producto("Silla Ergonómica", 300, "Oficina");

echo "<h2>Catálogo POO con Categorías</h2>";
echo "<ul>";
echo "<li>" . $prod1->getInfo() . "</li>";
echo "<li>" . $prod2->getInfo() . "</li>";
echo "</ul>";
?>