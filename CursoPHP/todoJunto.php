<?php
/*include("funciones.php");
include("superficie.php");
global $funcionesEjecutadas;
echo "<br>";

function superficieMayor($a1, $b1, $c1){
    $circulo1 = circulo($a1);
    $circulo2 = circulo($b1);
    $circulo3 = circulo($c1);
    $circulomayor = mayor($circulo1, $circulo2, $circulo3);
    return $circulomayor;
}

$circulomayor = superficieMayor(10,12,15);
echo "$circulomayor";

circulo(6);
mayor(2,4,6);

echo "<br>";
echo "$funcionesEjecutadas";
echo "<br>";
*/
$mystring =  "Me encanta php, A Mi tambien me encanta php!";
$findme   = "php";
$pos = strpos($mystring, $findme);
echo "$pos";
echo '<br>';

$email = 'pepe@hotmail.com';
$encontrar = '@';
$posicion = strpos($email, $encontrar);
echo $posicion;
echo "<br>";

/*$email = substr($email, 0, $posicion);
echo $email; // leonpurpura.com
echo "<br>";*/


$email = str_replace('p', '', $email);
echo $email; // leonpurpura.com
?>
