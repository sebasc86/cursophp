<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clase2</title>
  </head>
  <body>

    <?php $edad = 8; ?>

    <?php
      if(esMayor($edad)) {
        echo "Hola Usuario";
      } else {
        echo 'No se permite el acceso';
      }

      function esMayor($edad)
      {
          return $edad >= 18;
      }

     ?>

     <br>
     <br>




  </body>
</html>
