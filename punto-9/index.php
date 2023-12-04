<?php
  $number=0;
  $i=0;

  echo "Digite un numero para generar su tabla de multiplicar \n";
  $number= readline();

  while ( $i <= 30){
    echo $number. "X" . $i . "=" . $number*$i ."\n"; 
    $i++;
  }

?>