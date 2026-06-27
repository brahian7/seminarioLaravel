<?php
require_once 'config/database.php';

// Obtener la conexión desde la clase Database
$db = Database::getInstance()->getConnection();

// Ejecutar la consulta
$stmt = $db->query("SELECT * FROM users");

// Mostrar resultados
echo "<h2>Usuarios desde PDO</h2>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: {$row['id']} - Nombre: {$row['nombre']} - Email: {$row['email']}<br>";
}
?>
