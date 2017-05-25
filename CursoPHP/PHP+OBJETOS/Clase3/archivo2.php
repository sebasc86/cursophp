<?php
namespace prueba\ejemplo;
include 'archivo1.php';

const PRUEBA = 'namespace "prueba\ejemplo" estamos en el archivo2.php<br>';
function prueba() {}
class prueba
{
    static function staticmethod() {
        echo 'funcion archivo2.php<br>';
    }
}

/* Unqualified name */
prueba(); // resuelve a function prueba\ejemplo\prueba
prueba::staticmethod(); // resuelve a clase prueba\ejemplo\prueba, method staticmethod
echo PRUEBA; // resuelve a constante prueba\ejemplo\PRUEBA

/* Qualified name */
subnombre\prueba(); // resuelve a function prueba\ejemplo\subnamespace\prueba
subnombre\prueba::staticmethod(); // resuelve a clase prueba\ejemplo\subnamespace\prueba

echo subnombre\PRUEBA; // resuelve a constante prueba\ejemplo\subnamespace\PRUEBA

/* Fully qualified name */
\prueba\ejemplo\prueba(); // resuelve a function prueba\ejemplo\prueba
\prueba\ejemplo\prueba::staticmethod(); // resuelve a clase prueba\ejemplo\prueba, method staticmethod
echo \prueba\ejemplo\PRUEBA; // resuelve a constante prueba\ejemplo\PRUEBA
?>
