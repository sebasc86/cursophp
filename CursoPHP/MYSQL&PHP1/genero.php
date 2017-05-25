<?php
include 'conn.php';

$query = $db -> query('select nombre from genero');
$generos = $query -> fetchAll(PDO::FETCH_ASSOC);

foreach ($generos as $genero) {
  echo $genero['nombre'] . '<br>';
};



/*
$query = $db -> query('select genero from pelicula');
$genero = $query -> fetchAll(PDO::FETCH_ASSOC);

foreach ($peliculas as $pelicula) {
  echo $pelicula['titulo'].'<br>';
  # code...
};*/




 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Generos</h1>
     <ul>
       <?php foreach ($generos as $genero): ?>
           <li><?php echo $genero['nombre'] . '<br>' ?></li>
       <?php endforeach; ?>

     </ul>

   </body>
 </html>
