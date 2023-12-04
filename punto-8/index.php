<?php
  $membershipType="";
  $personNumber=0;
  $totalPrice=25000;

  echo "Digite el numero de personas que ingresaran a la bolera \n";
  $personNumber= readline();

  echo "Digite el tipo de membresia \n";
  $membershipType= readline();

  $totalPrice= $personNumber * $totalPrice;

  switch (strtoupper($membershipType)){
    case "A":
      echo "El precio total a pagar es: $ ". $totalPrice*0.7;
      break;
    case "B":
      echo "El precio total a pagar es: $ ". $totalPrice*0.75;
      break;
    case "C":
      echo "El precio total a pagar es: $ ". $totalPrice*0.9;
      break;
    case "D":
      echo "El precio total a pagar es: $ ". $totalPrice*0.95;
      break;
    default:
      echo "El tipo de membresia no es valida";
  }

?>