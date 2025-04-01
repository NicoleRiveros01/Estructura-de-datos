<?php

$numeros =  array(5, 8, 12, 4, 5, 34, 9);

$numerosFiltrar = array_filter($numeros, function($valor) :bool{
    return $valor <= 4 ;
    
});

print_r($numerosFiltrar);



?>