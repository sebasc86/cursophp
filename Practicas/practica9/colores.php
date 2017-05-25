<?php
session_start();

$colores = [
    1 => '',
    2 => 'Verde',
    3 => 'Rojo',
    4 => 'Azul',
];


$expira = time() + 3600;


if(isset($_GET["colores"])){
  $estilo = $_GET["colores"];
  setcookie("colores", $estilo, $expira);
} elseif(isset($_COOKIE["colores"])){
      $estilo = $_COOKIE["colores"];
} else {
  $estilo = "";
};


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Colores</title>
  </head>
  <body style="background-color:
  <?php




if(isset($estilo) && $estilo == 2){
  echo "green";
} elseif (isset($estilo) && $estilo == 3){
  echo "red";

}elseif (isset($estilo) && $estilo == 4){
  echo "blue";

};


  ?>
  ">
    <form id='register' name="formulario" action='colores.php' method='get'>
      <div class='container'>
          <label for='color' >COLOR:</label><br/>
          <select name="colores" value="colores" id="color" onchange="formulario.submit();">

            <?php foreach ($colores as $key => $color): ?>
                <option value="<?php echo $key; ?>">
                              <?php echo $color; ?>
                </option>
            <?php endforeach; ?>

        </select>
      </label>
    </div>

  </form>

  </body>
</html>
