<?php



function triangulo ($base, $altura){
    global $funcionesEjecutadas;
    echo ++$funcionesEjecutadas;
    $altura = $altura / 2;
    $superficie = $base * $altura;
    return $superficie;
    }

//$triagunlosuperficie = triangulo(4,8);

//echo "$triagunlosuperficie";

echo "<br>";

function rectangulo ($base, $altura){
    global $funcionesEjecutadas;
    echo ++$funcionesEjecutadas;
    $superficie = $base * $altura;
    return $superficie;
    };


function circulo ($radio){
global $funcionesEjecutadas;
echo ++$funcionesEjecutadas;
$superficie = pi() * ($radio^2);
return $superficie;
};


echo "<br>";
//Ejercicio 3;



 ?>
