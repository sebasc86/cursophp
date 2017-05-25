<?php
include '../MYSQL&PHP1/conn.php';
//binding

$stmt = $db -> prepare("SELECT * FROM pelicula where id = ? and titulo = ?");
$stmt -> execute([1, 'Avatar']);
$pelicula = $stmt -> fetch(PDO::FETCH_ASSOC);
var_dump($pelicula);


echo "<h2>Binding por Array</h2>";

$query = $db -> prepare("select * from pelicula where id = ? and titulo = ?");

$query -> execute([1, "Avatar"]);

$pelicula = $query -> fetch(PDO::FETCH_ASSOC);

var_dump ($pelicula);
echo "<br>";

echo "<h2>Binding por Valor</h2>";

//el statement ya está preparado arriba!

$id = 1;
$titulo = "Avatar";
$query -> bindValue(1,$id, PDO::PARAM_INT);
$query -> bindValue(2,$titulo, PDO::PARAM_INT);
$query -> execute();

$pelicula = $query -> fetch(PDO::FETCH_ASSOC);

var_dump ($pelicula);
echo "<br>";

echo "<h2>Placeholder</h2>";

$query2 = $db -> prepare("select * from pelicula where id = :id and titulo = :titulo");

$id = 3;
$titulo = "La Guerra de las Galaxias: Episodio VI";
//$query2 -> bindValue(:id,$id, PDO::PARAM_INT);
//$query2 -> bindValue(:titulo,$titulo, PDO::PARAM_INT);
$query2 -> execute([":id" => 3, ":titulo" => "La Guerra de las Galaxias: Episodio VI"]);

$pelicula2 = $query2 -> fetch(PDO::FETCH_ASSOC);

var_dump ($pelicula2);
echo "<br>";







 ?>
