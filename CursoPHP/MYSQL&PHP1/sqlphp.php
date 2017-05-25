<?php
include('conn.php');

$query = $db -> query('select * from pelicula');
$peliculas = $query -> fetchAll(PDO::FETCH_ASSOC);

foreach ($peliculas as $pelicula) {
  echo $pelicula['titulo'].'<br>';
  # code...
};


echo "<hr>";
echo "<br>";

$query = $db -> query('select * from pelicula where id=1');
$peliculas = $query -> fetchAll(PDO::FETCH_ASSOC);

foreach ($peliculas as $pelicula) {
  echo $pelicula['titulo'].'<br>';
  # code...
};
echo "<hr>";
echo "<br>";


$query = $db -> query('select * from pelicula');
$pelicula = $query -> fetch(PDO::FETCH_ASSOC);

while ($pelicula = $query->fetch(PDO::FETCH_ASSOC)){
  echo $pelicula['titulo'].'<br>';
  # code...
};
echo "<hr>";
echo "<br>";


$query = $db -> query('select titulo from pelicula');
$titulo = $query -> fetchColumn(PDO::FETCH_ASSOC);

while ($titulo = $query->fetchColumn()) {
  echo $titulo.'<br>';
  # code...
};

echo "<hr>";
echo "<br>";

$query = $db -> query('select * from pelicula');
$filas = $query -> rowCount();
var_dump($filas);


$query = $db -> query('select count(id) as total from pelicula');
$filas = $query -> rowCount();
var_dump($filas);






 ?>
