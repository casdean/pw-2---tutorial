<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex11.php" method="get">
        <fieldset>
            <legend>Tipo do Triângulo</legend>
            <label for="ladoA">lado A:</label>
            <input type="number" name="A" id="A" required>
            <label for="ladoB">Lado B:</label>
            <input type="number" name="B" id="B" required>
            <label for="ladoC">Lado C:</label>
            <input type="number" name="C" id="C" required>
            <br>
            <input type="submit" value="enviar"> 
        </fieldset>
</form>
  
<?php

if (isset($_GET['ladoA']) && isset($_GET['ladoB']) && isset($_GET['ladoC']) ){
    $ladoA= ($_GET['ladoA']);
    $ladoB = ($_GET['ladoB']);
    $ladoC = ($_GET['ladoC']);


if ($ladoA == $ladoB && $ladoB == $ladoC) {
    echo "Triângulo equilátero";

} elseif ($ladoA != $ladoB && $ladoA != $ladoC && $ladoB != $ladoC) {
    echo "Triângulo escaleno";
}
 else {
    echo "Triângulo isósceles";
}
}else{
    echo 'informe os valores dos lados, é obrigatório';
}
?>




</body>
</html>