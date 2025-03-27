<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex10.php" method="get">
        <fieldset>
            <legend>Cadastro</legend>
            <label for="usuario">Usuário:</label>
            <input type="text" name="usu" id="usu" required>
            <label for="senha">Senha:</label>
            <input type="number" name="senha" id="senha" max = "6"  required>
            <br>
            <input type="submit" value="enviar"> 
        </fieldset>
</form>

<?php

if (isset($_GET['usuario']) && isset($_GET['senha']) ){
    $senha= ($_GET['senha']);
    $usuario = ($_GET['usuario']);

if($senha == '123' && $usuario == 'admin'){
    echo "Conectado com sucesso";
}else {
    echo "Acesso negado! Usuário ou senha incorretos!";
}
}else{
    echo 'insira seus dados no cadastro';
}

?> 
</body>
</html>