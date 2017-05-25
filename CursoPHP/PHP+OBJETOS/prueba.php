<?php
require 'Usuario.php';

$usuario1 = new Usuario('Jorge','27-11-1986','prueba@gmail.com', 27);

var_dump($usuario1);
echo "<br>";

$usuario2 = new Usuario('Fede','27-11-1976','prueba44@gmail.com', 27 );

var_dump($usuario2);
echo "<br>";

/*echo $usuario1->mail;
echo "<br>";
echo $usuario2->mail;
echo "<br>";

$usuario1->mail = 'sarasa@hotmail.com';
echo $usuario1->mail;
echo "<br>";*/

echo $usuario1->getSaludar();

$usuario3 = new Usuario('Roxana', '06-08-1986', 'aguanteboca@gmail.com', 30, '123456Ab');

var_dump($usuario3);
echo "<br>";

$usuario3->setNombre('Beatriz');
echo $usuario3->getNombre();
echo "<br>";


$usuario3->setPassword('Beatriz');
echo $usuario3->getPassword();







 ?>
