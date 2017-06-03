<?php

require 'archivo1.php';
require 'archivo2.php';

var_dump(__NAMESPACE__);

use \Helpers\Importantes\Test;
use \Helpers\Importantes\Ubicacion as FB_Ubicacion;

echo \Helpers\Importantes\Test\ARCHIVO;

Test\ubicar(); //archivo2.php

FB_Ubicacion::mostrar(); //archivo1.php

FB_Ubicacion::mostrar(); //archivo1.php

FB_Ubicacion::mostrar(); //archivo1.php
