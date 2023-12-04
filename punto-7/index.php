<?php
  $firstNumber=0;
  $secondNumber=0;
  $operation=0;

  echo "Digite el primer numero a operar: ";
  $firstNumber=readline();

  echo "Digite el segundo numero a operar: ";
   $secondNumber=readline();

  echo "Seleccion el tipo de operacion que desea realizar, teniendo en cuenta que: 1=Suma  2=Resta  3=Multiplicacion  4=Division \n";
  $operation=readline();

  switch ($operation){
    case 1:
    $operation=$firstNumber + $secondNumber;
    break;
    case 2:
    $operation=$firstNumber - $secondNumber;
    break;
    case 3:
    $operation=$firstNumber * $secondNumber;
    break;
    case 4:
    $operation=$firstNumber / $secondNumber;
    break;
  }

  echo "El resultado de la operacion es= $operation";



?>