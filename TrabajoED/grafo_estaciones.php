<?php
echo "=== 🔗 Red de Juegos y Conexiones (grafos) ===\n";
echo " Conoce las conexiones entre las diferentes atracciones del parque. ¡Descubre cómo moverte de un juego a otro!\n\n";

class Grafo {
    private $adyacente = [];
    public function agregarVertice($nombre) {
        if (!isset($this->adyacente[$nombre])) {
            $this->adyacente[$nombre] = [];
        }
    }
    public function agregarArista($origen, $destino) {
        $this->adyacente[$origen][] = $destino;
    }
    public function mostrar() {
        foreach ($this->adyacente as $origen => $destinos) {
            echo "🎢 $origen se conecta con: " . implode(", ", $destinos) . "\n";
        }
    }
}

$grafo = new Grafo();
$grafo->agregarVertice("Entrada");
$grafo->agregarVertice("Rueda Gigante");
$grafo->agregarVertice("Montaña Rusa");
$grafo->agregarVertice("Carrousel");
$grafo->agregarVertice("Casa del Terror");

$grafo->agregarArista("Entrada", "Rueda Gigante");
$grafo->agregarArista("Entrada", "Montaña Rusa");
$grafo->agregarArista("Rueda Gigante", "Carrousel");
$grafo->agregarArista("Montaña Rusa", "Casa del Terror");

$grafo->mostrar();
echo "\n=============================================================================\n";
?>
