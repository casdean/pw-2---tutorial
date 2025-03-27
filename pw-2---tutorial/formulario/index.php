<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <form action="index.php" method="get">
        <fieldset>
        <legend>Informações do Personagem</legend>
            <label for="nome">Nome do Personagem:</label>
            <input type="text" name="nome" id="nome" placeholder="nome do personagem" required>
            <br>
            <label for="poder">Poder:</label>
            <input type="text" name="poder" id="poder" placeholder="poder do personagem" required>
            <br>
            <input type="submit" value="Enviar">


        </fieldset>
    </form>
    
    
    <?php
    if (ISSET($_GET['nome'])){
        if (empty($_GET['nome'])) {
            echo '<br> nome obrigatório';
        }else{
          echo $_GET['nome'];  
        }
        
    }

    if (ISSET($_GET['poder'])){
        if (empty($_GET['poder'])) 
            echo '<br> obrigatório';
        }else{
        echo $_GET['poder'];
    }

    
   
    ?>
</body>
</html>