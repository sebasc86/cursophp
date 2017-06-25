<?php
require '../classes/ValidacionRegistro.php';
require '../classes/Usuario.php';
require_once('../classes/JSONDB.php');

$include = $_SERVER['DOCUMENT_ROOT'].'/php/tm/oop/proyecto/';

$POST['email'] = '123456@usuario.com';
$POST['password'] = '123456';

$db = new JSONDB($include.'datos.json');
$usuario = new Usuario($db);

$validador = new ValidadorLogin();
$prueba = $validador->validar($POST, $usuario);
var_dump($prueba);
