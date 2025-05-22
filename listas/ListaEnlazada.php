<?php

class Nodo {
    public $dato;
    public $siguiente;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

class ListaEnlazada {
    public $cabeza;

    public function __construct() {
        $this->cabeza = null;
    }

    public function insertar($dato) {
        $nuevoNodo = new Nodo($dato);
        $nuevoNodo->siguiente = $this->cabeza;
        $this->cabeza = $nuevoNodo;
    }

    public function imprimirHTML() {
        $actual = $this->cabeza;
        echo "<ul>";
        while ($actual instanceof Nodo) {
            echo "<li>" . $actual->dato . "</li>";
            $actual = $actual->siguiente;
        }
        echo "</ul>";
    }
    
}

$lista = new ListaEnlazada();
$lista->insertar("Elemento1");
$lista->insertar("Elemento2");
$lista->insertar("Elemento3");
$lista->imprimirHTML();

?>