<?php

$a = [
  'a' => 1,
  'b' => 2,
  'c' => 'Yo <3 a Json'
];

$a = json_encode($a);
echo $a;

$b = json_decode($a, true);
var_dump($b);
echo "<br>";
echo "<br>";

echo $b["c"] . ' | '. $b['a']. ' | '. $b['b']. ' | ';

 ?>
