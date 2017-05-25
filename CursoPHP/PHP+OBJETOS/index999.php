<?php
require 'Auto.php';
/* al estar declarado los parametros en el contructor no funcionan
$miAuto = new Auto();
$miAuto->marca = 'Ford';
$miAuto->modelo = 2012;
$miAuto->color = 'Rojo';

var_dump($miAuto);


$miAuto2 = new Auto();
$miAuto2->marca = 'Peugeot';
$miAuto2->modelo = 1996;
$miAuto2->color = 'Azul';

var_dump($miAuto2);
*/

$miAuto3 = new Auto('Peugeot', 1996);

var_dump($miAuto3);
