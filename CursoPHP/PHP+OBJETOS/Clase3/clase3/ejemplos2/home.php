<?php

require 'archivo1.php';
require 'archivo2.php';

use \Helpers\Importantes\Test; //para archivo2.php
use \Helpers\Importantes\Ubicacion; //para archivo1.php

echo \Helpers\Importantes\Test\ARCHIVO;

Test\ubicar(); //archivo2.php

Ubicacion::mostrar(); //archivo1.php

Ubicacion::mostrar(); //archivo1.php

Ubicacion::mostrar(); //archivo1.php
