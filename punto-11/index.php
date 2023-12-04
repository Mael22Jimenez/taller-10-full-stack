<?php
  $sum=0;

for ($i=1; $i<=100; $i=$i+2){
  echo $i . "\n";
  $sum += $i;
}

echo "La suma de todos los numero impares es: ". $sum;
?>