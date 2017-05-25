<?php

/*
$colores = ["naranja","rojo","amarillo"];

var_dump($colores);
echo $colores[0];
echo $colores[1];
echo $colores[2];

foreach ($colores as $color) {
	echo $color;
}

//////////////////////////////
$auto1 = [
	"marca" => "chevrolet",
	"color" => "rojo",
	"anio" => "1988"
];

echo $auto["marca"] //"chevrolet"
echo $auto["color"] //"rojo"
echo $auto["anio"] //"1988"

foreach ($auto as $key => $value) {
	echo $key;
	echo $value;
	echo "<br>";
}
//////////////////////////////

$auto1 = [
	"marca" => "chevrolet",
	"color" => "rojo",
	"anio" => "1988"
];

$auto2 = [
	"marca" => "chevrolet",
	"color" => "rojo",
	"anio" => "1988"
];

$auto3 = [
	"marca" => "chevrolet",
	"color" => "rojo",
	"anio" => "1988"
];

$autos = [$auto1, $auto2, $auto3];


foreach ($autos as $auto) {
	//var_dump($auto);
	echo $auto["marca"];
	echo "<br>";
}


*/


//// VALIDAR el form

$nombre = "";
$errores = [];

if($_POST){

	//trim me chequea espacios vacios
	$nombre = $_POST["nombre"];

	if(trim($nombre) && strlen($nombre) >= 5){
		echo "buenisimo";
	} else {
		$errores["error_nombre"] = "Esta mal el nombre";
	}

}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hola</h1>
	<form method="post">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" 
		value='<?php echo "$nombre"; ?>'>
	
		<?php
		if(isset($errores["error_nombre"])){
			echo $errores["error_nombre"];
		}
		?>

		<input type="submit" name="Enviar">
	</form>
	
</body>
</html>


