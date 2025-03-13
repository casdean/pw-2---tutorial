<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex9.php" method="get">
        <fieldset>
            <legend>Ordem crescente</legend>
            <label for="n1">Numero1:</label>
            <input type="number" name="n1" id="n1" required>
            <label for="n2">numero2:</label>
            <input type="number" name="n2" id="n2" required>
            <label for="n3">numero2:</label>
            <input type="number" name="n3" id="n3" required>
            <br>
            <input type="submit" value="enviar">
        </fieldset>
    </form>


<?php




if (isset($_GET['n1']) && isset($_GET['n2'])  && isset($_GET['n3'])){
    $n1= ($_GET['n1']);
    $n2 = ($_GET['n2']);
    $n3 = ($_GET['n3']);

    if ($n1 < $n2 && $n1 < $n3 && $n2 < $n3) {
        echo $n1 . ', ' . $n2 . ', ' . $n3;
    }else if ($n2 < $n1 && $n2 < $n3 && $n1 < $n3){
        echo $n2 . ', ' .  $n1 . ', ' . $n3;
    }else if ($n3 < $n2 && $n3 < $n1 && $n1 < $n2){
        echo $n3 . ', ' . $n1 . ', ' . $n2;
    }else{
        echo $n3 . ', ' . $n2 . ', ' . $n1;
    }

}else{
    echo "valor dos numeros é obrigatório";
}

?>
</body>
</html>