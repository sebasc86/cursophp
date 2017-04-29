<?php
$dia = 5;
switch ($dia) {
  case 1:
    echo "El día es domingo";
    break;
  case 2:
      echo "El día es lunes";
      break;
  default:
  case 3:
    echo "El día es martes";
    break;
  case 4:
      echo "El día es miercoles";
    break;
  case 5:
        echo "El día es jueves";
    break;
  case 6:
    echo "El día es viernes";
    break;
  case 7:
    echo "El día es sabado";
    break;
};

echo "<br>";

$dias = ["","dom", "lun", "mar", "mier", "jue", "vier", "sab"];
echo $dias[$dia];

 ?>
