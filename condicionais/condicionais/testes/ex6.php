<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex6.php" method="get">
        <fieldset>
            <legend>O maior número</legend>
            <label for="valor1">Primeiro Valor:</label>
            <input type="number" name="valor1" id="valor1" required>
            <label for="valor2">Segundo Valor:</label>
            <input type="number" name="valor2" id="valor2" required>
            <br>
            <input type="submit" value="enviar">
        </fieldset>
    </form>


<?php

if (isset($_GET['valor1']) && isset($_GET['valor2'])) {
   $valor1 = ($_GET['valor1']);
   $valor2 = ($_GET['valor2']);
   
   if ($valor1 > $valor2) {
    echo 'O valor ' . $valor1 . 'é maior que ' . $valor2;
   }else if ($valor1 < $valor2){
    echo  'O valor ' . $valor2 . 'é maior que ' . $valor1;
   }else{
    echo 'os valores ' . $valor1 . '' . $valor2 . 'são iguais';
   }
}else{
    echo 'Por favor coloque os dois valores'
}

?>
</body>
</html>