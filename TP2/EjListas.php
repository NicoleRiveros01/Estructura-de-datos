<?php

class Producto {
    public $nombre;
    public $siguiente;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->siguiente = null;
    }
}

class ListaProductos {
    public $cabeza;

    public function __construct() {
        $this->cabeza = null;
    }

    public function agregarProducto($nombre) {
        $nuevoProducto = new Producto($nombre);
        $nuevoProducto->siguiente = $this->cabeza;
        $this->cabeza = $nuevoProducto;
    }

    public function mostrarHTML() {
        $actual = $this->cabeza;
        echo "<ul>";
        while ($actual instanceof Producto) {
            echo "<li>" . $actual->nombre . "</li>";
            $actual = $actual->siguiente;
        }
        echo "</ul>";
    }
}

// Crear y usar la lista
$lista = new ListaProductos();
$lista->agregarProducto("Manzanas");
$lista->agregarProducto("Pan");
$lista->agregarProducto("Leche");
$lista->mostrarHTML();

?>