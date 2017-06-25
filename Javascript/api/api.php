<?php


$errores = [];

if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
  $errores['nombre'] = 'Es requerido';  
}

if (!isset($_POST['email']) || empty($_POST['email'])) {
  $errores['email'] = 'Es requerido';  
}

header('Content-Type: application/json');

if (!empty($errores)) {
 header('HTTP/1.0 422 Unprocessable entity.'); 
}

// En este punto el servicio tuvo que registrar la acción en la base

print json_encode($errores);


