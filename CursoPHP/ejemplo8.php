<?php

//$nombre="Juan";

$usuario = isset($nombre)?$nombre:"usuario";

var_dump($usuario);

echo "<br>";

// ----


$usuario = $nombre ?? "usuario";

var_dump($usuario);
