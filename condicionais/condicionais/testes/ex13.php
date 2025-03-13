<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="ex-13.php" method="get">
    <fieldset>
        <legend>Verificar Aprovação</legend>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="portugues">Nota de Português:</label>
        <input type="text" name="portugues" id="portugues"  required>
        <label for="matematica">Nota de Matemática:</label>
        <input type="text" name="matematica" id="matematica"  required>
        <label for="ingles">Nota de Inglês:</label>
        <input type="text" name="ingles" id="ingles" required>
        <label for="informatica">Nota de Informática:</label>
        <input type="text" name="informatica" id="informatica"  required>
        <label for="frequencia">Frequência (%):</label>
        <input type="number" name="frequencia" id="frequencia"  required>
        <input type="submit" value="enviar"></input>
    </fieldset>
</form>

<?php

if (isset($_GET['nome']) && isset($_GET['portugues']) && isset($_GET['matematica']) && isset($_GET['ingles']) && isset($_GET['informatica']) && isset($_GET['frequencia'])) {
    $nome = $_GET['nome'];
    $portugues = ($_GET['portugues']);
    $matematica = ($_GET['matematica']);
    $ingles = ($_GET['ingles']);
    $informatica = ($_GET['informatica']);
    $freq = ($_GET['frequencia']);
    $media = ($portugues + $matematica + $ingles + $informatica) / 4;

if ($media >= 7 && $freq >= 75) {
    echo "Aprovado";
} else if ($media < 7) {
    echo "Reprovado";
} else {
    echo "Reprovado";
}
}else{
    echo 'insira as informações acima para mostrar sua situação';
}
?>
</body>
</html>