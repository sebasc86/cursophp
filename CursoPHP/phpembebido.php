<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sintaxis abreviada</title>
  </head>
  <body>

    <?php
      $menu = [
        'home' => "Home",
        'quienes-somos' => "Quienes Somos",
        'faq' =>"FAQ"
      ];

     ?>

     <?php foreach ($menu as $key => $value): ?>

       <ul><li><a href= "<?php echo($key); ?>.php">
            <?php echo ($value); ?>
        </a>
        </li>
        </ul>
     <?php endforeach; ?>


     <?php for($i=0; $i<3; $i++); ?>
      <p> hola <p>
    <?php endfor; ?>
  </body>
</html>
