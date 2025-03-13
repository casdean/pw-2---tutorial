<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex8.php" method="get">
        <fieldset>
            <legend>Calcular bônus da venda</legend>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="vendas">Valor total das Vendas:</label>
            <input type="number" name="vendas" id="vendas" required>
            <br>
            <input type="submit" value="enviar">
        </fieldset>
    </form>


<?php

if (isset($_GET['nome']) && isset($_GET['vendas'])){
    $nome = ($_GET['nome']);
    $vendas = ($_GET['vendas']);
    
    if ($vendas > 5000) { 
        $bonus10 = ($vendas * 0.10) + $vendas;
        echo $bonus10;

    }else if ($vendas > 2000 && $vendas <=5000){
        $bonus20 = ($vendas * 0.20) + $vendas;
        echo $bonus20;

    }else if ($vendas > 1000 && $vendas <=2000){
        $bonus30 = ($vendas * 0.30) + $vendas;
        echo $bonus30;
    }else{
        echo 'Vendas abaixo de R$1000 não incluem bônus';
    }

}else{
    echo "valor da venda obrigatório";
}

?>
</body>
</html>