<?php
include '../MYSQL&PHP1/conn2.php';
//
// // $id = 'default';
// // $titulo = $_POST['titulo'];
// // $rating = $_POST['rating'];
// // $premios = '0';
// // $fecha_de_estreno = '2001-01-01';
// // $duracion = $_POST['duracion'];
// // $genero = '5';
//

$nombre = 'Seba';
$apellido = 'Coscia';
$email = 'sebas@gmail.com';
$password = 'abc123';
$edad = 20;
$sexo = 'Masculino';
$conductor = 'conductor';
$acompañante = 'acompañante';
//
//


    $stmt = $db->prepare("INSERT INTO usuario (id,nombre,apellido,dni,telefono,mail,password,edad,sexo,conductor,acompanante,foto_perfil)
    VALUES (default, :nombre, :apellido, default, default, :mail, :password, :edad, :sexo, :conductor, :acompanante, default);");



    //$titulo = "La Guerra de las Galaxias: Episodio VI";
    $stmt -> bindValue(':nombre', $nombre, PDO::PARAM_STR);
    $stmt -> bindValue(':apellido', $apellido, PDO::PARAM_STR);
    $stmt -> bindValue(':mail', $email, PDO::PARAM_STR);
    $stmt -> bindValue(':password', $password, PDO::PARAM_STR);
    $stmt -> bindValue(':edad', $edad, PDO::PARAM_INT);
    $stmt -> bindValue(':sexo', $sexo,  PDO::PARAM_STR);
    $stmt -> bindValue(':conductor', $conductor,  PDO::PARAM_STR);
    $stmt -> bindValue(':acompanante', $acompañante,  PDO::PARAM_STR);

    // $query2 -> bindValue(:titulo, $, PDO::PARAM_INT);
    // $query2 -> execute([":id" => 3, ":titulo" => "La Guerra de las Galaxias: Episodio VI"]);
    $stmt->execute();

//
//
// $stmt = $db -> prepare("INSERT INTO usuario (id,nombre,apellido,dni,telefono,mail,password,foto_perfil)
// VALUES (:id,:nombre, :apellido, :dni, :telefono, :mail, :password, :foto_perfil);");
//
// //$titulo = "La Guerra de las Galaxias: Episodio VI";
// $stmt -> bindValue(':id', $id, PDO::PARAM_STR);
// $stmt -> bindValue(':nombre', $nombre, PDO::PARAM_STR);
// $stmt -> bindValue(':apellido', $apellido, PDO::PARAM_STR);
// $stmt -> bindValue(':dni', $dni, PDO::PARAM_INT);
// $stmt -> bindValue(':telefono', $telefono, PDO::PARAM_INT);
// $stmt -> bindValue(':mail', $mail, PDO::PARAM_STR);
// $stmt -> bindValue(':password', $password, PDO::PARAM_STR);
// $stmt -> bindValue(':foto_perfil', $foto_perfil, PDO::PARAM_STR);
// //$query2 -> bindValue(:titulo,$titulo, PDO::PARAM_INT);
// //$query2 -> execute([":id" => 3, ":titulo" => "La Guerra de las Galaxias: Episodio VI"]);
//
// $stmt -> execute();

 ?>
