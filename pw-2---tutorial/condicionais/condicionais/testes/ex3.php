<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex3.php" method="get">
        <fieldset>
            <legend>Maior ou Menor que 100</legend>
            <label for="numero">Qual seu número?</label>
            <input type="number" name="num" id="num" required>
            <br>
            <input type="submit" value="enviar">
        </fieldset>
    </form>
</body>
</html>

<?php

    if (isset($_GET['numero'])) {
        $num = ($_GET['numero']);

        if ($num < 100) {
            echo 'seu numero é menor que 100';
        }else if ($num > 100){
            echo 'seu número é maior que 100';
        }else {
            echo 'Favor digitar um número entre 0 e 100';
        }
    }else{
        echo 'número é obrigatório';
    }

?>

