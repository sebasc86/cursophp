<?php
require_once('php/classes/Usuario.php');
require_once('php/classes/JSONDB.php');

$include = $_SERVER['DOCUMENT_ROOT'].'/php/tm/oop/proyecto/';


$db = new JSONDB($include.'datos.json');

/*
$instance = new Usuario($db);

$usuario = $instance->find('barclay@mail.com');
$usuario->nombre = 'Otro nombre';
*/

$usuario = new Usuario($db);
$usuario->nombre = 'Nuevo nuevo';
$usuario->apellido = 'Usuario';
$usuario->email = '123456@usuario.com';
$usuario->setPassword('123456');
$usuario->save();
