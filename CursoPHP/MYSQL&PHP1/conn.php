<?php


try {
  $db = new PDO('mysql:host=localhost;dbname=base_de_datos_peliculas;charset=utf8mb4','root','');
  $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $e) {
  echo "La base de datos no esta disponible";
}




 ?>
