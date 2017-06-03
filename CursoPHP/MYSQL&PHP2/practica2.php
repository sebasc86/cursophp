<?php
/*Binding de parámetros
Utilizando el método de PDO bindValue o enviando los parámetros dentro del método
execute​ realizaremos los siguientes ejercicios:
1. Partiendo del archivo agregarPelicula.php dado en la clase de ayer (y también
subido en la clase de hoy). Modificarlo para que efectivamente agregue películas
utilizando “bindeo” de parámetros.
2. Modificar una vez más agregarPelicula.php para que si el título de la película ya
existe, solo actualize el resto de los datos.
3. En un nuevo archivo PHP
a. Abriremos una nueva conexión a la base de datos a través de PDO.
b. Definiremos la variable $idSerie con el valor 3.
c. Mostraremos los nombres de dicha serie.
d. Probar modificar $idSerie con los valores 1, 2 y 4.
e. Modificar el código para que el $idSerie sea tomado de los parámetros
enviados por GET. En caso de que no hubiese, indicarlo.
f. Agregar abajo del título de la serie un listado con los nombres de las
temporadas.
g. Agregar abajo de cada nombre de temporada un listado con los nombres de
cada uno de los episodios.
h. Permitir que por GET también llegue un parámetro que indique la fecha de
inicio de la serie. Así, este archivo solamente mostrará los datos de las series
que hayan iniciado posterior a dicha fecha.
i. Permitir que por GET también llegue un parámetro que indique cuantas
series se quieren mostrar en el listado.*/

include '../MYSQL&PHP1/conn.php';

var_dump($_POST);




$id = 'default';
$titulo = $_POST['titulo'];
$rating = $_POST['rating'];
$premios = '0';
$fecha_de_estreno = '2001-01-01';
$duracion = $_POST['duracion'];
$genero = '5';

$query = $db -> query("select * from pelicula where titulo = '$titulo'");
$filas = $query -> rowCount();

if($filas == 0){

  $stmt = $db -> prepare("INSERT INTO pelicula (id,titulo,rating,premios,fecha_de_estreno,duracion,id_genero)
  VALUES (:id,:titulo, :rating, :premios, :fecha_de_estreno, :duracion, :id_genero);");

  //$titulo = "La Guerra de las Galaxias: Episodio VI";
  $stmt -> bindValue(':id', $id, PDO::PARAM_STR);
  $stmt -> bindValue(':titulo', $titulo, PDO::PARAM_STR);
  $stmt -> bindValue(':rating', $rating, PDO::PARAM_STR);
  $stmt -> bindValue(':premios', $premios, PDO::PARAM_INT);
  $stmt -> bindValue(':fecha_de_estreno', $fecha_de_estreno, PDO::PARAM_STR);
  $stmt -> bindValue(':duracion', $duracion, PDO::PARAM_STR);
  $stmt -> bindValue(':id_genero', $genero, PDO::PARAM_STR);
//$query2 -> bindValue(:titulo,$titulo, PDO::PARAM_INT);
//$query2 -> execute([":id" => 3, ":titulo" => "La Guerra de las Galaxias: Episodio VI"]);

  $stmt -> execute();
}else {
  $stmt = $db -> prepare("UPDATE pelicula SET id = :id, titulo = :titulo, rating = :rating, premios = :premios, fecha_de_estreno = :fecha_de_estreno,   duracion = :duracion, genero = :id_genero");
  $stmt -> bindValue(':id', $id, PDO::PARAM_STR);
  $stmt -> bindValue(':titulo', $titulo, PDO::PARAM_STR);
  $stmt -> bindValue(':rating', $rating, PDO::PARAM_STR);
  $stmt -> bindValue(':premios', $premios, PDO::PARAM_INT);
  $stmt -> bindValue(':fecha_de_estreno', $fecha_de_estreno, PDO::PARAM_STR);
  $stmt -> bindValue(':duracion', $duracion, PDO::PARAM_STR);
  $stmt -> bindValue(':id_genero', $genero, PDO::PARAM_STR);
  $stmt -> execute();

};














 ?>
