<?php
echo " === ⏳ Fila para Juegos (colas) ===\n";
echo " Los visitantes se agrupan en una fila para subir a sus atracciones favoritas. El primero en llegar es el primero en entrar.\n\n";

class Cola {
    private $datos = [];
    public function enqueue($valor) { $this->datos[] = $valor; }
    public function dequeue() { return array_shift($this->datos); }
    public function mostrar() { return $this->datos; }
}

$fila = new Cola();
$fila->enqueue("Ana");
$fila->enqueue("Bruno");
$fila->enqueue("Camila");

echo "🎟️ Personas esperando para la Montaña Rusa:\n";
foreach ($fila->mostrar() as $persona) {
    echo "👤 $persona\n";
}
echo "\n=============================================================================\n";
?>
