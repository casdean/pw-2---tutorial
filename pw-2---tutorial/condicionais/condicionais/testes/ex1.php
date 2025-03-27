<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex1.php" method="get">
        <fieldset>
            <legend>Situação do aluno</legend>
            <label for="nota">Nota:</label>
            <input type="number" name="nota" id="nota" required>
            <br>
            <input type="submit" value="enviar">

        </fieldset>
    </form>


<?php

    if (isset($_GET['nota'])){
        $nota = ($_GET['nota']);

        if ($nota > 7 && $nota <= 10) {
            echo 'Você está aprovado';
        }else if ($nota > 6 && $nota <= 7){
            echo 'Você está em recuperação';
        }else if ($nota <6){
            echo 'Você está reprovado';
        }else{
            echo 'Insira um número entre 0 e 10';
        }
    }else{
        echo "nota obrigatória";
    }
   
?>
</body>
</html>