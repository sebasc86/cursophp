<?php

$a = [
    'a' => 1,
    'b' => 2,
    'c' => "YO <3 JSON"
];


$prueba = json_encode($a);

json_decode($prueba);

echo $prueba;

$b = json_decode($prueba, true);

var_dump($b);
echo "<br>";
echo "<br>";

echo $b["c"]. " | ".$b["a"]. " | ".$b["b"]." |" ;
