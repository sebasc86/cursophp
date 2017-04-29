<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>for</title>
  </head>
  <body>
    <?php
      $colores = ["rojo", "azul", "verde"];

      for ($i=0; $i < count($colores); $i++) {
        # code... count = .length en php
        echo "<li>$colores[$i]</li>";
      };


     ?>




  </body>
</html>
