<?php
    $Apo = $_POST['Apo'];
    $pe = $_POST['pe'];
    $resultado = null;
    $texto = 'El area de octagono regular es: ';

   if (!empty($Apo) && !empty($pe)){
      $resultado = 4 * $pe * $Apo;
      echo "Valor de la Perimetro es : $pe",'<br>';
      echo "Valor de la Apotema es : $Apo" ,'<br>','<br>';
      echo "$texto $resultado";

    }else{
      echo 'No puede dejar los campos vacios';
   }

?>