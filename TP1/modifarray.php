<?php

//añadir un registro a un arrelgo

$ropa = array("camisa","pantalon","zapatos","medias");

$ropa[]="gorra";

print_r($ropa);

/*$ropa = ["camisa","pantalon","zapatos","medias"];
unset($ropa[2]);
print_r($ropa);*/

//eliminar un registro de un arreglo


/*$ropaEliminar = "zapatos";
$llave = array_search($ropaEliminar,$ropa);

if ($llave!==false)
{
    unset($ropa[$llave]);
}

print_r($ropa);*/

/*$ropa[1]="bufanda";
print_r($ropa);*/

$ropa[3]="bufanda";
print_r($ropa);



?>