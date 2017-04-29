<?php
if (file_exists("texto.txt")) {
  $fp = fopen("texto.txt", "r+");
  fwrite($fp, "hola5");

}else{
    $fp = fopen("texto.txt", "w+");
    fwrite($fp, "hola2");
}

fclose($fp);
var_dump($fp);





 ?>
