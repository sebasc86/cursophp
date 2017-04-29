

<?php


function login($pass)
{
    if ($pass == "123456"){
      $repuesta = [
        "nombre" => "admin",
        "edad" => 20
      ];
    } else {
      $repuesta = [];
    }
    return $repuesta;
}

//De esta forma
$usuario = login("123456");

if($usuario) {
  echo "Hola ".$usuario["nombre"];
} else {
  echo 'No se permite el acceso';
}

//o de esta forma
  if($usuario = login ("123456")) {
    echo "Hola ".$usuario["nombre"];
  } else {
    echo 'No se permite el acceso';
  }



 ?>
