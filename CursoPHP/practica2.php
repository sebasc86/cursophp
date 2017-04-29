<?php
$nUno = 10;
$nDos = 9;

if ($nDos > $nUno) {
  echo "el Numero mayor es " . $nDos;
} else {
  echo "el Numero" . "$nUno" . " es Mayor";
};
echo "<br>";

$x = 1;
$y = 5;

$valorAsignado = rand($x,$y);

if ($valorAsignado == 3 || $valorAsignado == 5) {
echo "El valor es " . $valorAsignado;
} else{
  echo "el Numero no es 3 ni 5";
};
echo "<br>";
echo "<br>";

//ejercicio 4

$valorN = rand(1,100);

echo "$valorN";
echo "<br>";

if($valorN > 50){
  echo "El numero es mayor a 50";
} else {
  echo "el Numero es menor a 50";
}

echo "<br>";

$valorJ = rand(0,100);
echo "$valorJ";
echo "<br>";

if ($valorJ > 50 || $valorJ == 0) {
  echo "El número pasa la condición";
} else {
  echo "El número no pasa la condición";
};
echo "<br>";
echo "<br>";

$edad = 30;
$casado = false;
$sexo = "Masculino";

if ($sexo == "Otro"){
    echo "Bienvenido";
  } elseif ($edad > 18 && $casado) {
    echo "Bienvenido";
  };

echo "<br>";
echo "<br>";

$cantidadAlumnos = 11;

if($cantidadAlumnos){
  echo "true";
} else {
  echo "false";
};

echo "<br>";
echo "<br>";

//ejercicio 8

if($i = 1) {
  echo "true";
} else {
  echo "false";
};

echo "<br>";
echo "<br>";

//ejercicio 9

$numero = 9;

$parOimpar = $numero % 2 ? "Impar" : "Par";
echo "$parOimpar";

echo "<br>";
echo "<br>";

//ejercicio 10

$j = rand(1,5);

/*switch ($j) {
  case 1:
    echo "Su numero es 1";
    break;
  case 2:
    echo "Su numero es 2";
    break;
  case 3:
    echo "su numero es 3";
  case 4:
    echo "su numero es 4";
  case 5:
    echo "Su numero es 5";
    break;
};*/

//ejercicio 11 es correlativo al 10

switch ($j) {
  case 1:
    echo "Su numero es 1";
    break;
  case 2:
    echo "Su numero es 2";
    break;
  case 3:
  case 4:
  case 5:
    echo "Su numero no es 1 y ni 2";
    break;
};

echo "<br>";
echo "<br>";

// 11 bis

$a = 1;
$b = 10;

if($a<=>$b){
  echo "Hola";
};








 ?>
