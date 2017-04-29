<?php



foreach ($_POST as $key => $value ) {
  if(is_array($value)){
      foreach ($value as $key1 => $value1) {

        echo $key. ": " .$value1;
        echo "<br>";
      }
  }else{
    echo $key. " : " .$value;
    echo "<br>";
    }
  }


foreach ($_GET as $key => $value ) {
  echo $key. " : " .$value;
  echo "<br>";
}

echo "<br>";

var_dump(getallheaders());

echo "<br>";
echo "<br>";

foreach (getallheaders() as $nombre => $valor) {
    echo "<br>";
    echo $nombre.": ".$valor;
    echo "<br>";
}

echo "<br>";
var_dump($_SERVER);

foreach ($_SERVER as $valorArray => $valordentro) {
  echo "<br>";
  echo $valorArray.": ".$valordentro;
  echo "<br>";
}


echo "<br>";

var_dump($_FILES);
echo "<br>";

var_dump($_REQUEST);
echo "<br>";
echo "<br>";

    foreach ($_REQUEST as $key4 => $value4) {
      if(is_array($value4)){
        foreach ($value4 as $key5 => $value5) {
            echo $key4.": ".$value5;
            echo "<br>";
        }
      }else{
      echo $key4.": ".$value4;
      echo "<br>";
      }
    }
  echo "<br>";
  echo "<br>";

  var_dump($_SESSION);
  echo "<br>";
  var_dump($_ENV);
  echo "<br>";
  var_dump($_COOKIE);
  var_dump($GLOBALS);
  echo "<br>";
  echo "<br>";


  foreach ($GLOBALS as $key9 => $value9) {
    if(is_array($value9)){
      foreach ($value9 as $key10 => $value10) {
          echo $key9.": ".$value10;
          echo "<br>";
          if(is_array($value10)){
            foreach ($value10 as $key11 => $value11) {
                echo $key10.": ".$value11;
                echo "<br>";
                if(is_array($value11)){
                  foreach ($value11 as $key12 => $value12) {
                      echo $key11.": ".$value12;
                      echo "<br>";
                      if(is_array($value12)){
                        foreach ($value12 as $key13 => $value13) {
                            echo $key12.": ".$value13;
                            echo "<br>";
                            if(is_array($value13)){
                              foreach ($value13 as $key14 => $value14) {
                                  echo $key13.": ".$value14;
                                  echo "<br>";

                              }
                            }else{
                            echo $key13.": ".$value13;
                            echo "<br>";
                            }

                        }
                      }else{
                      echo $key12.": ".$value12;
                      echo "<br>";
                      }

                  }
                }else{
                echo $key11.": ".$value11;
                echo "<br>";
                }

            }
          }else{
          echo $key10.": ".$value10;
          echo "<br>";
          }

      }
    }else{
    echo $key9.": ".$value9;
    echo "<br>";
    }
  }













 ?>
