<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validacion</title>
  </head>
  <body>
<h1>Filter_Var</h1>

<h2>Validar entero</h2>


                <!--$input(lo que ingresa el usuario)   //filtro-->
<?php // filter_var($input, CONSTANTE)

$input = "3";
//$input = 3;
//$input = tres;
$resultado = filter_var($input, FILTER_VALIDATE_INT);
if ($input !== false) {
  var_dump($input * 3);
}

?>


<h2>Validar entero con min y max</h2>


                <!--$input(lo que ingresa el usuario)   //filtro-->
<?php // filter_var($input, CONSTANTE, $opciones)
//$options es una array asociativo

$input = 4;
$option = [
        "options" => ["min_range" => 1,
        "max_range" => 12;
];
$resultado = filter_var($input, FILTER_VALIDATE_INT, $option);
if ($input !== false) {
  var_dump($input * 3);
}






?>




  </body>
</html>
