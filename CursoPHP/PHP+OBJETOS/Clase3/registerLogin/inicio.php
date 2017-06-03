<?php
	require("soporte.php");

	$repoUsuarios = $repo->getRepositorioUsuarios();

	$usuarioLogueado = $auth->traerUsuarioLogueado($repoUsuarios);

	if ($usuarioLogueado) {
		
		$imagenPerfil = $usuarioLogueado->getAvatar();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Bienvenidos a mi sitio
	<?php if ($auth->estaLogueado()) { ?>
		Sos un capo por estar en mi sitio <?= $usuarioLogueado->getUsername() ?>
		<div>
			<img src="<?=$imagenPerfil?>"/>	  
		</div>
		<a href="logout.php">Log Out</a>
	<?php } else { ?>
		<a href="register.php">Registrate</a>
		<a href="login2.php">Logueate</a>
	<?php } ?>
</body>
</html>