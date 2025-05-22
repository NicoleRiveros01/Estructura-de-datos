<?php
echo "<h2>👟 Recorrido de un Visitante (pilas)</h2>";
echo "<p>Simulamos el recorrido de un visitante por las atracciones del parque. Los lugares que visitó se guardan en la pila, ¡y puede retroceder cuando lo desee!</p>";

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

echo "🧾 Juegos visitados (último a primero):<br>";
foreach ($recorrido->mostrar() as $juego) {
    echo "🎮 $juego<br>";
}
?>
