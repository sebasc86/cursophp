<?php


if ($_FILES['imgPerfil']['error'] == UPLOAD_ERR_OK) {

  $filename = $_FILES['imgPerfil']['tmp_name'];
  $ext = $_FILES["imgPerfil"]["name"];
  $ext = pathinfo($ext, PATHINFO_EXTENSION); //jpg
  $nombre = uniqid() . ".". $ext;
  $destination =  __DIR__ . "/../imagenes/" . $nombre;
  move_uploaded_file($filename, $destination);

// dir+ nombre de imagen + ext




?>
