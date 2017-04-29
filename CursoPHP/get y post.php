<?php

var_dump($_GET);

function tabla($min, $max) {
    $miArray = [];
    for ($i = $min; $i <= $max; $i++) {
    array_push($miArray,$i); //$miArray[] = $i;
    }
    return $miArray;
  };

$miTabla = tabla($_GET["min"], $_GET["max"]);
var_dump($miTabla);
 ?>
