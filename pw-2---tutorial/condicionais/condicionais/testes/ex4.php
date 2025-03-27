<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="ex4.php" method="get">
      <fieldset>
         <legend>Primeiro ou Segundo semestre</legend>
         <label for="mes">Informe o mês:</label>
         <input type="text" name="mes" id="mes" required> 
         <br>
         <input type="submit" value="enviar">

      </fieldset>
   </form>
</body>
</html>


<?php

   if (isset($_GET['mes'])) {
      $mes = ($_GET['mes']);
      
      if ($mes == 'janeiro' || $mes == 'fevereiro' || $mes == 'março' || $mes == 'abril' || $mes == 'maio' || $mes == 'junho') {
         echo 'Você se encontra no primeiro semestre';
      }else if($mes == 'julho' || $mes == 'agosto' || $mes == 'setembro' || $mes == 'outubro' || $mes == 'novembro' || $mes == 'dezembro' ){
       echo 'Você se encontra no segundo semestre';
      }else{
         echo 'coloque um mês do ano';
      }
   }else{
      echo 'Mês é obrigatório';
   }

?>