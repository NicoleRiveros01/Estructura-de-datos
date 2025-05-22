<?php
echo "<h2>🗺️ Rutas Recomendadas (arboles)</h2>";
echo "<p>El sistema te recomienda qué rutas seguir según tus intereses. Aquí tienes algunas opciones de recorrido:</p>";

class NodoArbol {
    public $valor;
    public $izq;
    public $der;
    public function __construct($valor) {
        $this->valor = $valor;
        $this->izq = null;
        $this->der = null;
    }
}

$raiz = new NodoArbol("Inicio");
$raiz->izq = new NodoArbol("Ruta Aventura");
$raiz->der = new NodoArbol("Ruta Familiar");
$raiz->izq->izq = new NodoArbol("Montaña Rusa");
$raiz->izq->der = new NodoArbol("Casa del Terror");
$raiz->der->izq = new NodoArbol("Carrousel");
$raiz->der->der = new NodoArbol("Mini Safari");

function mostrarRuta($nodo) {
    if ($nodo !== null) {
        mostrarRuta($nodo->izq);
        echo "➡️ $nodo->valor<br>";
        mostrarRuta($nodo->der);
    }
}

mostrarRuta($raiz);
?>
