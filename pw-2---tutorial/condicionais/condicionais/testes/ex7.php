<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex7.php" method="get">
        <fieldset>
            <legend>Maioridade ou não</legend>
            <label for="anoNasc">Ano que nasceu: </label>
            <input type="number" name="ano" id="ano" required min="4">
            <br>
            <input type="submit" value="enviar">
        </fieldset>
    </form>

    <?php

if (isset($_GET['anoNasc'])){
    $ano = ($_GET['anoNasc']);

    if ($ano > 2007) {
        echo 'Você é menor de idade';
    }else if ($ano <= 2007){
        echo 'Você é maior de idade';
    }else{
        echo 'informe uma data válida';
    } 
}else{
    echo "o ano é obrigatório";
}

?>
</body>
</html>