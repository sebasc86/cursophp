<?php
namespace Helpers\Importantes;

echo __NAMESPACE__;

const ARCHIVO = 'archivo1.php<br>';

function ubicar ()
{
	echo "Estoy en archivo1.php<br>";
}

class Ubicacion {
	public static function mostrar()
	{
		echo "archivo1.php desde la clase Ubicacion<br>";
	}
}
