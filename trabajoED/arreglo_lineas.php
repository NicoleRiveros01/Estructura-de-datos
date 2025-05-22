<?php
echo "<h2>🚍 Líneas de Transporte (arreglos)</h2>";
echo "<p>Las siguientes líneas te llevan a las diferentes zonas del parque. ¡Elige tu destino y que comience la aventura!</p>";

$lineas = [
    ["codigo" => "A", "nombre" => "Tren Aventura", "capacidad" => 50],
    ["codigo" => "B", "nombre" => "Monorriel Fantasía", "capacidad" => 40],
    ["codigo" => "C", "nombre" => "Tractor Safari", "capacidad" => 30]
];

foreach ($lineas as $linea) {
    echo "🚆 <strong>{$linea['nombre']}</strong> (Código: {$linea['codigo']}, Capacidad: {$linea['capacidad']} personas)<br>";
}
?>
