<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While</title>
</head>
<body>
	<h1>Bucle while</h1>
	<ul>
		<?php
			$i = 3;
			while ($i) {
				echo "<li>Fila $i</li>";
				$i--;
			}
		?>
	</ul>

	<ul>
		<?php
			$i = 1;
			while ($i <= 3) {
				echo "<li>Fila $i</li>";
				$i++;
			}
		?>
	</ul>

	<h1>Bucle do while</h1>
	<ul>
		<?php
			$existentes = [3, 5, 7, 2];

			do {
				$nuevo = rand(1,10);
				echo "<br>";
				var_dump($nuevo);
			} while (in_array($nuevo, $existentes));

			$existentes[] = $nuevo;
			echo "<br>";
			var_dump($existentes);
		?>
	</ul>

	<h1>Bucle for</h1>
	<ul>
		<?php
			$colores = ["Rojo", "Azul", "Verde"];
			
			for ($i=0; $i < count($colores); $i++) {
				echo "<li>$colores[$i]</li>";
			}
		?>
	</ul>

	<h1>Bucle for 2</h1>
	<ul>
		<?php
			$colores = ["Rojo", "Azul", "Verde"];
			
			for ($i = 0, $l = count($colores); $i < $l; $i++) {
				echo "<li>$colores[$i]</li>";
			}
		?>
	</ul>

	<h1>Break - Continue</h1>
	<ul>
		<?php
			$cantidad = 0;
			$colores = ["Rojo", "Azul", "Verde", "Rojo", "Amarillo", "Negro"];
			
			for ($i = 0, $l = count($colores); $i < $l; $i++) {
				echo $colores[$i];
				echo "<br>";
				if ($colores[$i] == "Rojo") {
					$cantidad++;
					if ($cantidad >= 2) {
						break;
					}
				}
			}
		?>
	</ul>

	<ul>
		<?php
			$cantidad = 0;
			$colores = ["Rojo", "Azul", "Verde", "Rojo", "Amarillo", "Negro"];
			
			for ($i = 0, $l = count($colores); $i < $l; $i++) {
				if ($colores[$i] == "Rojo") {
					continue;
				}
				echo "<li>$colores[$i]</li>";
			}
		?>
	</ul>

	<h1>Bucle dentro de bucle con for each</h1>
		<ul>
		<?php
			$categorias = [
				"Ropa" => ["Pantalones", "Remeras"],
				"Zapatos" => ["Cordones", "Deportivos"]
			];
			
			foreach ($categorias as $indice => $valor) {
				echo "$indice <br>";
				foreach ($valor as $subvalor) {
					echo "$subvalor </br>";
					break 2;
				}
			}

		?>
		</ul>
		<ul>
			<li>
				Ropa
				<ul>
					<li>Pantalones</li>
					<li>Remeras</li>
				</ul>
			</li>
			<li>
				Calzado
				<ul>
					<li>Cordones</li>
					<li>Deportivos</li>
				</ul>
			</li>
		</ul>

		<p><a href=""></a><a href=""></a></p>
		<p><a href=""></a><a href=""></a></p>
		
		
</body>
</html>