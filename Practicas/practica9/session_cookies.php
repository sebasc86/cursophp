<?php  
	
	if(isset($_COOKIE["recordame"])){
		echo "esta logueado bien y esta la cookie de recordame";
	} else {


					if($_POST){
						//loguear("a","a");
						$usuario = $_POST["usuario"];
						$pass = $_POST["password"];
						loguear($usuario, $pass);

					}

					
					var_dump($_COOKIE);


					//var_dump($_POST);

					function loguear($usuario, $pass){
						//VALIDACION.
						if($usuario === "a" && $pass === "a"){
							echo "esta logueado";
							
							if(isset($_POST["recordame"])){
								setcookie("recordame","ok",time()+99999);
							}

						}else {
							echo "NO esta logueado";
						}
					}

	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form method="post">
		<label for="usuario">Usuario:</label>
		<input type="text" name="usuario" id="usuario" required>	
		
		<br>

		<label for="password">Contraseña:</label>
		<input type="password" name="password" id="password" required>
		
		<br>

		Recordame
		<input type="checkbox" name="recordame" value="si">

		<br>

		<input type="submit" name="Enviar">
	</form>

</body>
</html>