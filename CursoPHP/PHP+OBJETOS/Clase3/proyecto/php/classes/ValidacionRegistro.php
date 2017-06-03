<?php

require 'Validador.php';

class ValidadorRegistro extends Validador {

	public function validar($datos, $usuario) {
		$errors = [];

	    //validar nombre
	    $nombre = trim($datos['nombre']);
	    if ($nombre == "") {
	        $errors[] = "Te faltó ingresar tu nombre";
	    }

	    //validar email
	    $email = trim($datos['email']);
	    if ($email == "") {
	        $errors[] = "Te faltó ingresar tu email";
	    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	        $errors[] = "El email ingresado no es válido";
	    }

	    //validar edad
	    $edad = trim($datos['edad']);
	    if (!is_numeric($edad)) {
	        $errors[] = "La edad tiene que ser un número";
	    }

	    //validar pass
	    if ($datos['password'] != $datos['password2']) {
	        $errors[] = "Las contraseñas no coinciden";
	    }

	    //devuelvo los errores
	    return $errors;
	}

}
