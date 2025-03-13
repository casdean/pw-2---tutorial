<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ex12.php" method="get">
        <fieldset>
            <legend>Operador</legend>
            <label for="numero1">Número 1:</label>
            <input type="number" name="num1" id="num1">
            <label for="numero2">Número 2:</label>
            <input type="number" name="num2" id="num2">
            <label for="operador">Operador:</label>
            <input type="text" name="operador" id="operador">
            <br>
            <input type="submit" value="enviar"> 
        </fieldset>
    </form>

<?php

if (isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['operador']) ){
    $operador= ($_GET['operador']);
    $valor1 = ($_GET['numero1']);
    $valor2 = ($_GET['numero2']);


if ($operador == '+'){
    echo $valor1 + $valor2;
}
else if ($operador == '-'){
    echo $valor1 - $valor2;
}
else if ($operador == '*'){
    echo $valor1 * $valor2;
}
else if ($operador == '/'){
    echo $valor1 / $valor2;
}else{
    echo "Operador inválido";
}
}else{
    echo 'informe os valores que você deseja, por favor';
}


 ?>


</body>
</html>