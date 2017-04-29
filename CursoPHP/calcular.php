<?php


$a = 3;
$b = 11;
$resultado;

// Suma

$resultado = $a + $b;

var_dump($resultado);

// multiplicacion

$resultado = $a * $b;

var_dump($resultado);

//------------------------

function sumar($a, $b){
  $resultado = $a + $b;
  return $resultado;
};

$resultadoFuncion = sumar(11, 13); //puedo guardarlo dentro de una variable.

var_dump($resultadoFuncion);

// para no hacer unparametro obligatorio es ej: $b = "";

echo "<hr>";

function saludar($nombre, $apellido = "") {
echo $nombre . " " . $apellido;
}

$saludo = saludar("Juan", "Perez");
echo "<br>";
$saludo2 = saludar("Ricardo");

 ?>
