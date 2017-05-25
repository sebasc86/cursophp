<?php
session_start();

if(!isset($_SESSION["contador"])){
$_SESSION["contador"] = 0;
}elseif (isset($_GET["incrementar"])) {
  $_SESSION["contador"]++;
}elseif(isset($_GET["resetear"])){
  $_SESSION["contador"] = 0;
}


  echo $_SESSION["contador"];


 ?>
