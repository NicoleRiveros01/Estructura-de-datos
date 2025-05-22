<?php
echo "<h2>🏁 Estaciones del Tren Aventura (listas enlazadas)</h2>";
echo "<p>El Tren Aventura tiene varias estaciones por donde pasarás. A continuación, te mostramos las estaciones en orden.</p>";

class Nodo {
    public $nombre;
    public $siguiente;
    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->siguiente = null;
    }
}

class ListaEnlazada {
    public $cabeza = null;
    public function agregar($nombre) {
        $nuevo = new Nodo($nombre);
        if ($this->cabeza === null) {
            $this->cabeza = $nuevo;
        } else {
            $actual = $this->cabeza;
            while ($actual->siguiente !== null) {
                $actual = $actual->siguiente;
            }
            $actual->siguiente = $nuevo;
        }
    }
    public function mostrar() {
        $actual = $this->cabeza;
        while ($actual !== null) {
            echo "🚏 Estación: {$actual->nombre}<br>";
            $actual = $actual->siguiente;
        }
    }
}

$estaciones = new ListaEnlazada();
$estaciones->agregar("Entrada Principal");
$estaciones->agregar("Zona Pirata");
$estaciones->agregar("Montaña Rusa");
$estaciones->agregar("Zona Infantil");
$estaciones->mostrar();
?>
