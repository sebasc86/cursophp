<?php

require 'Validador.php';

class ValidadorLogin extends Validador {

	public function validar($datos, $usuario) {
		$errores = [];
		if (!$usuario = $usuario->find($datos['email'])) {
			$errores[] = 'El password o el mail ingresado no es correcto.';
		}
		var_dump($usuario);
		if (!password_verify($usuario->password, $datos['password'])) {
		    $errores[] = 'El password o el mail ingresado no es correcto.';
		}
		return $errores;
	}

}
