<?php
include 'Persona.php';
include 'Pyme.php';
include 'Multinacional.php';


$pyme = new Pyme('44545454', 'pepito srl', 'gonca444');
var_dump($pyme);
echo '<br>';

$multi = new Multinacional('44545454', 'pepito srl', 'centro');
var_dump($multi);






 ?>
