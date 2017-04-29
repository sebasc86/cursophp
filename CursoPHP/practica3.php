<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica 3</title>
  </head>
  <body>
    <?php

      $i = 1;
      for ($i=1; $i <=rand(1,100) ; $i++) {
        # code...
        echo "$i";
        echo "<br>";
      }

      echo "<br>";
      echo "<br>";

      for ($i= 1; $i <= 10; $i++) {
        $valor = $i*2;
        echo "2 x $i = $valor";
        echo "<br>";

      }

      echo "<br>";
      echo "<br>";



          $cantidad = 0;
          $tiros = 0;
          while ($cantidad <= 5){

                $random = rand(0,1);
                  if($random == 1){
                    $cantidad++;
                  };
                $tiros++;

              };

              echo "Total tiros = $tiros";
              echo "<br>";
              echo "<br>";


              $cantidadCara = 0;
              $tirosTotal = 0;
          do {
            $random = rand(0,1);
            $tirosTotal++;

            echo "Tiro nro = $tirosTotal";
            echo "<br>";


            if ($random == 1) {
              $cantidadCara++;

              echo "cara = $cantidadCara";
              echo "<br>";
            }
          } while ($cantidadCara < 1);

          echo "<br>";
          echo "<br>";


          $miArray = ["Sebastian", "Pedro", "Pablo", "Sergio", "Miguel"];

          for ($i = 0; $i < count($miArray); $i++) {
            echo "$miArray[$i]";
            echo "<br>";
          };

          echo "<br>";

          $cantidadArray = count($miArray);
          $i = 0;

          while ($i < $cantidadArray) {
            echo "$miArray[$i]";
            $i++;
            echo "<br>";
          };

          echo "<br>";


        $j = 0;
          do {
            echo "$miArray[$j]";
            $j++;
            echo "<br>";
          } while ($j < $cantidadArray);

          echo "<br>";


    $valores = [];
      $max_num = 10;

      for ($x = 0;$x < $max_num; $x++) {
          $num_aleatorio = rand(1,10);
          array_push($valores,$num_aleatorio);
        };

         $i = 0;


     for ($i = 0; $i < count($valores); $i++) {
          if ($valores[$i] == 5) {
            echo "se encontro un $valores[$i]";
            break;
          }else {
            echo "$valores[$i]";
            echo "<br>";
          };
        };
        echo "<br>";



    $j = 0;
    echo "<br>";
    while ($j < count($valores)) {
      if($valores[$j] == 5 ){
        echo "tiene el numero $valores[$j]";
        break;
      } else {
          echo "$valores[$j]";
          echo "<br>";
          $j++;
      };
    };
    $y = 0;
    do {
      if ($valores[$y] == 5) {
        echo "tiene el numero $valores[$y]";
        break;
      } else {
        echo "$valores[$y]";
        echo "<br>";
        $y++;
      };
    } while ($y < count($valores));




$letras = range("a", "o");
echo "<br>";
echo "<br>";
$u = 0;
while($u < count($letras)){
  echo "en la posición [$u] se encuentra el valor [$letras[$u]]";
  $u++;
  echo "<br>";

};

echo "<br>";

$mascota = [
  "animal" => "Perro",
  "edad" => 5,
  "altura" => "40cm",
  "nombre" => "Tadeo"
];
foreach ($mascota as $indice => $value) {
  echo  $indice . " : " . $value;
  echo "<br>";
    };

  echo "<br>";

  $miAuto = [
  "Color" => "Rojo",
  "Marca" => "Ford"
  ];
  foreach ($miAuto as $clave => $valor) {
  echo $clave . ":" . $valor;
  echo "<br>";
  }

echo "<br>";

  $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
  "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
  "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
  "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid",
  "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
  "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
  "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

  foreach ($ceu as $pais => $capital) {
    echo "La capital de " . $pais . " es " . $capital;
    echo "<br>";
  };

$ceu2 = [
  "Argentina" => [
      "Ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"], 
      "Es Americano" => 1
    ],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo",
"Es Americano" => 1
],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla",
"Es Americano" => 1
],
"Francia" => ["Paris", "Nantes", "Lyon",
"Es Americano" => 0
],
"Italia" => ["Roma", "Milan", "Venecia",
"Es Americano" => 0
],
"Alemania" => ["Munich", "Berlin", "Frankfurt",
"Es Americano" => 0
]
];


foreach ($ceu2 as $pais2 => $ciudades) {
  foreach ($ciudades as $subvalores) {
    if($subvalores == 1 ) {
      echo "<br>";
      echo "$pais2";
      echo "<br>";
      foreach ($ciudades as $subvalores) {
        // var_dump($subvalores);
        echo "<ul><li>$subvalores</li></ul>";
      };
    };
  };
  };
    ?>



  </body>
</html>
