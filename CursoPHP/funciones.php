<?php



$numeroMagico = 8;

function mayor ($a, $b, $c) {
    global $funcionesEjecutadas;
    echo ++$funcionesEjecutadas;
    if($a > $b && $a > $c){
    echo "$a";
    } elseif ($b > $a && $b > $c) {
    echo "$b";
    } elseif ($c > $a && $c > $b ) {
    echo "$c";
    };
  };

// para agregar un parametro que puede ser no requerido puedo estar o no en la funcion iria asi test($a,$b, $c="")

//$resutadoM = mayor(1, 2, 3);
echo "<br>";

function tabla($min, $max) {
    $miArray = [];
    for ($i = $min; $i <= $max; $i++) {
    array_push($miArray,$i); //$miArray[] = $i;
    }
    return $miArray;
  };

$miTabla = tabla(4, 8);



 ?>
