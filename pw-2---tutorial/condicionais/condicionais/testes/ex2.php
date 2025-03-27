<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Voto</title>
</head>
<body>

    <form action="ex2.php" method="get">
        <fieldset>
            <legend>Idade para votar</legend>
            <label for="idade">Sua idade:</label>
            <input type="number" name="idade" id="idade" required min="0">
            <br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

<?php
    if (isset($_GET['idade'])) {
        $idade = ($_GET['idade']); 

        if ($idade < 16) {
            echo "Você não pode votar ainda, espere mais uns anos.";
        }else if ($idade >= 16 && $idade < 18) {
            echo "Você não é obrigado a votar, mas sinta-se à vontade!";
        }else if ($idade >= 18 && $idade < 70) {
            echo "Você é obrigado a votar.";
        }else{
            echo "Votar é opcional.";
        }
    }else{
        echo "nota obrigatória";
    }
?>

</body>
</html>
