<?php

class Nodo{

    public $dato;

    public $siguiente;

      public function __construct($dato) {
        $this->$dato = $dato;
        $this ->siguiente = null;
    }
}

class listasenlazadas{

    public $cabeza;
    public function __construct() {
        $this->cabeza = null;
    }

}

?>