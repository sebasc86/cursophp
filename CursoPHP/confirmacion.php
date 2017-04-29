<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php /*
    <?php if ($_GET == false) :?>
    <?php header("Location: registro_usuarios.php")?>
    <?php exit; ?>
    <?php endif;?>*/ ?>
    <?php var_dump($_GET["nombre"]);?>


    <h3>Registracion exitosa</h3>
      <p><?php echo "Muchas Gracias por registrarte". " ". ($_GET["nombre"]). ", ". "nos has dicho que tienes". " ".($_GET["edad"]). " años de edad <br>"; ?></p>


    <?php
    $miString = "Me encanta php, A Mi tambien me encanta php!";
    $busqueda = "php";
    $resultado = strpos($miString, $busqueda);
    echo "$resultado";

    ?>





  </body>
</html>

<?php
