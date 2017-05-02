<?php

include ("..\practica8\php\controller-php.php");

/*$ruta = 'imagenes/'; // Indicar ruta
$filehandle = opendir($ruta); // Abrir archivos
while ($file = readdir($filehandle)) {
if ($file != '.' && $file != '..') {
$tamanyo = GetImageSize($ruta . $file);
       ?>
<img src="<?php echo $ruta.$file ?>" width=”300px”>Img Uno<br>
      <?php
};
};
closedir($filehandle); // Fin lectura archivos*/

if(isset($_GET['nombre'])){
  $avatar = 'imagenes/'.$_GET['nombre']. '.' .'jpg';
      if (file_exists($avatar)){
          $avatar;
      } else{
          echo 'la imagen no existe';
      }
  };






 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>


      <img src='<?php echo $avatar ?>' alt="Perfil" />

   </body>
 </html>
