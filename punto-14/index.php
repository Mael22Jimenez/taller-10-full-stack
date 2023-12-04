<?php
  Include "./passwordCheck.php";

  $user="";
  $password="";

  echo "Digite su usuario a registrar \n";
  $user=readline();

  echo "Digite su contraseña a registrar \n";
  $password=readline();

  if(hasSecurityLong($password)){
    echo "Su contraseña tiene una longitud valida \n";

    if(hasUpperLetter($password)) {
      echo "Su contraseña tiene una letra mayuscula \n";

      if (hasNumber($password)) {
        echo "Felicidades su contraseña es segura \n";
        
      }else{
        echo "Su contraseña no cumple con numeros \n";
      }
    }else{
      echo "Su contraseña no cumple con letras mayusculas \n";
    }
    
  }else{
    echo "Su contraseña no cumple con la longitud segura \n";
  }

?>

  Funciones

<?php
  function hasSecurityLong($pass){
    return strlen($pass) >=8;
  }

  function hasUpperLetter($pass){
    $arrayPass = str_split($pass);

      foreach($arrayPass as $letter){
      if($letter == strtoupper($letter)){
      return true;
      }
      }
      return false;
  }

  function hasNumber($pass){
    $arrayPass = str_split($pass);

    foreach($arrayPass as $letter){
    if(is_numeric($letter)){
    return true;
    }
    }
    
    return false ; 
  }

?>

