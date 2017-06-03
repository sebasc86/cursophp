<?php
	require_once("soporte.php");
	require_once("clases/validadorLogin.php");

	if ($auth->estaLogueado()) {
		header("Location:inicio.php");exit;
	}
	$errores = [];
	if ($_POST) {
		
		$validador = new ValidadorLogin();

		$errores = $validador->validar($_POST, $repo);
		
		if (empty($errores))
		{
			$usuario = $repo->getRepositorioUsuarios()->traerUsuarioPorEmail($_POST["email"]);
			$auth->loguear($usuario);
			if ($validador->estaEnFormulario("recordame"))
			{
				$auth->guardarCookie($usuario);
			}
			header("Location:inicio.php");exit;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<?php include("errores.php"); ?>
		<div>
			<label for="email">Email</label>
			<input type="text" name="email" id="email"/>
		</div>
		<div>
			<label for="password">Contrase&ntilde;a</label>
			<input type="password" name="password" id="password"/>
		</div>
		<div>
			Recordame
			<input name="recordame" type="checkbox" value="true">
		</div>
		<div>
			<input type="submit" value="Enviar">
		</div>

	</form>
</body>
</html>