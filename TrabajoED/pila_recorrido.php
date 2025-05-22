<?php
echo "=== 👟 Recorrido de un Visitante (pilas) ===\n";
echo " Simulamos el recorrido de un visitante por las atracciones del parque. Los lugares que visitó se guardan en la pila, ¡y puede retroceder cuando lo desee!\n\n";

class Pila {
    private $datos = [];
    public function push($valor) { $this->datos[] = $valor; }
    public function pop() { return array_pop($this->datos); }
    public function mostrar() { return array_reverse($this->datos); }
}

$recorrido = new Pila();
$recorrido->push("Rueda Gigante");
$recorrido->push("Casa del Terror");
$recorrido->push("Montaña Rusa");

echo "🧾 Juegos visitados (último a primero):\n";
foreach ($recorrido->mostrar() as $juego) {
    echo "🎮 $juego\n";
}
echo "\n=============================================================================\n";
?>
