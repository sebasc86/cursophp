<?php
namespace Helpers\Importantes\Test;

const ARCHIVO = 'archivo2.php<br>';

function ubicar ()
{
	echo "Estoy en archivo2.php<br>";
}

class Ubicacion {
	public static function mostrar()
	{
		echo "archivo2.php desde la clase Ubicacion<br>";
	}
}
