<?php
include 'conn.php';

$idSerie = 5;

$query = $db->prepare("SELECT * from serie where id = $idSerie");
$query->execute();
$serie = $query->fetch(PDO::FETCH_ASSOC);
echo $serie['titulo'];


 ?>
