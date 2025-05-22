<?php

class Grafo {

    public $vertices;
    public $aristas;

    public function __construct() {
        $this->vertices = array();
        $this->aristas = array();
    }

    public function agregarVertice($vertice) {
        $this->vertices[] = $vertice;
        $this->aristas[$vertice] = array();
    }

    public function agregarArista($vertice1, $vertice2) {
        $this->aristas[$vertice1][] = $vertice2;
        $this->aristas[$vertice2][] = $vertice1;
    }

    public function imprimirGrafo() {
        foreach ($this->vertices as $vertice) {
            echo $vertice . " -------> ";
            foreach ($this->aristas[$vertice] as $item) {
                echo $item . "--->";
            }
            echo ".\n";
        }
    }
}

// Crear grafo y agregar vértices y aristas
$miGrafo = new Grafo();

$miGrafo->agregarVertice("A");
$miGrafo->agregarVertice("B");
$miGrafo->agregarVertice("C");
$miGrafo->agregarVertice("D");

$miGrafo->agregarArista("A", "B");
$miGrafo->agregarArista("B", "C");
$miGrafo->agregarArista("C", "A");
$miGrafo->agregarArista("B", "D");

echo "EL GRAFO CREADO ES:\n";
$miGrafo->imprimirGrafo();

?>