<?php
include 'conn.php';


$query = $db -> query('select titulo from pelicula');
$peliculas = $query -> fetchAll(PDO::FETCH_ASSOC);

/*foreach ($generos as $genero) {
  echo $genero['nombre'] . '<br>';
};*/

  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>peliclas</title>
  </head>
  <body>
    <ul>
      <?php foreach ($peliculas as $pelicula): ?>
        <li><?php echo $pelicula['titulo'] ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
