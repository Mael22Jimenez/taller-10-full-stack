<?php
$number=0;

echo "Digite el numero a multiplicar: ";
$number=readline();

for ($i=0; $i <= 30; $i++){
  $result= $number * $i;
  echo $number . " X " .$i." = ". $result. "\n";
}

?>