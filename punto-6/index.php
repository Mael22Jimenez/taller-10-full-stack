<?php
$name="";
$age=0;

echo "Digite su nombre: ";
$name=readline();

echo "Digite su edad: ";
$age=readline();

if ($age>=18){
  echo "El usuario $name es mayor de edad";
} else {
  echo "El usuario $name es menor de edad";
}
?>