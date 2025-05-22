<?php
echo "=== 🚍 Líneas de Transporte (arreglos) ===\n ";
echo " Las siguientes líneas te llevan a las diferentes zonas del parque. ¡Elige tu destino y que comience la aventura! \n\n";

$lineas = [
    ["codigo" => "A", "nombre" => "Tren Aventura", "capacidad" => 50],
    ["codigo" => "B", "nombre" => "Monorriel Fantasía", "capacidad" => 40],
    ["codigo" => "C", "nombre" => "Tractor Safari", "capacidad" => 30]
];

foreach ($lineas as $linea) {
    echo "🚆  {$linea['nombre']}  (Código: {$linea['codigo']}, Capacidad: {$linea['capacidad']} personas)\n ";
}
echo "\n=============================================================================\n";
?>
