<?php

$numeroentero = 30;
$numerodecimal = 30.3;
$uncaracterdoble = "S";
$uncarectersimple = 'C';
$stringsimple = 'Seba';
$stringdoble = "Coscia";

$numeroentero = "Hola";

echo $numeroentero;
echo "<br>";

$stringsimple = 30.5;

echo $stringsimple;
echo "<br>";

$uno = "Tres";
$dos = "tristes";
$tres = "tigres";
$cuatro = "tragan";
$cinco = "trigo";
$seis = "en";
$siete = "un";
$ocho = "trigal";

//el "." es un agregador es como si fuera el +

echo $uno . " " . $dos . " " . $tres . " " .$cuatro ." " . $cinco . " " . $seis . " " . $siete . " " . $ocho;
echo "<br>";
echo $tres . " " . $cuatro . " " . $ocho;
echo "<br>";



$misAnimales = ["mono", "gato", "perro", "conejo", "caballo"];
echo "<pre>";
var_dump($misAnimales);
echo "</pre>";

$misAnimales[] = "tigre";
$misAnimales[] = "cabra";


echo "<pre>";
var_dump($misAnimales);
echo "</pre>";

echo "Me gustan los animales" . " " . $misAnimales[0];


$misAnimales[0] = "onmitorrinco";

echo "<pre>";
var_dump($misAnimales);
echo "</pre>";

$misAnimales[100] = "Jirafa";

echo "<pre>";
var_dump($misAnimales);
echo "</pre>";

echo $misAnimales[100];
echo "<br>";

$misAnimales[16] = "Hiena";

echo $misAnimales[16];
echo "<br>";
echo "<br>";
//Ejercicio 5

$auto = [
  "Marca" => "Fiat",
  "Modelo" => "Palio",
  "Color" => "Blanco",
  "Anio" => ["2001", "2009"],
  "Patente" => "DVJ165"
];

echo "<pre>";
var_dump($auto);
echo "</pre>";
echo "<br>";

echo $auto["Anio"][1];

$auto[] = "Jorge Lopez";
$auto[14]= "Zurich";

$auto["Poliza"] = 349838;

echo "<pre>";
var_dump($auto);
echo "</pre>";

echo "<br>";

$auto["Patente"] = "DVJ999";
echo $auto["Patente"];

$auto[0] = "Raul Rodriguez";

echo "<br>";

echo $auto[0];
echo "<br>";

//Ejercicio 6

$entero = 35;
$decimal = 30.4;

echo "$entero" + "$decimal";
echo "<br>";
echo "$entero" - "$decimal";
echo "<br>";
echo "$entero" / "$decimal";
echo "<br>";
echo "$entero" * "$decimal";
echo "<br>";

$resto = $entero % $decimal;

echo "$resto";
echo "<br>";
echo "<br>";

$entero = $entero + 1;
$decimal = $decimal + 1;
$entero = $entero + 5;
$decimal = $decimal - 0.6;

$resultado = ($entero * 2 + $decimal) / ($entero / 2);

echo "$resultado";

echo "<br>";
echo "<br>";

//Ejercicio 7

$variableUno = "Hola";
$variableDos = "mundo";

$concatenar = $variableUno . " " . $variableDos;
echo $concatenar;
echo "<br>";
echo "<br>";

$pHp = $concatenar . " " . "Que esta bueno PHP";

echo "$pHp";



 ?>
