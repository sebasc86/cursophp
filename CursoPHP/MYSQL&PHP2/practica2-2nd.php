<?php
/*
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

include 'conn.php';

/*$idSerie = $_GET['id'];*/
$EstrenoSerie = $_GET['estreno'];
//$MostrarSerie = $_GET['mostrar'];

$query = $db -> query("SELECT titulo FROM serie;" /*WHERE id = $idSerie")*/);
$serie = $query -> fetchAll(PDO::FETCH_ASSOC);

$query2 = $db -> query("SELECT serie.titulo as Stitulo, episodio.titulo as Etitulo, episodio.fecha_de_estreno FROM serie
INNER JOIN temporada ON id_serie = serie.id
INNER JOIN episodio ON id_temporada = temporada.id
WHERE year(serie.fecha_de_estreno) > '$EstrenoSerie'");
$episodios = $query2 -> fetchAll(PDO::FETCH_ASSOC);

foreach ($serie as $key => $value) {
  echo '<h1>'.$value["titulo"].'</h1>';

};

var_dump($episodios[1]['Stitulo'])









 ?>
