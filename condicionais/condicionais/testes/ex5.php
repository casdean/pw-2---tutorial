<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex5.php">
        <fieldset>
            <legend>Vogal ou Consoante</legend>
            <label for="letra">Sua letra:</label>
            <input type="text" name="letra" id="letra">
            <br>
            <input type="submit" value="enviar">
        </fieldset>
    </form>

<?php

if (isset($_GET['letra'])) {
   $letra = ($_GET['letra']);
   
   if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
    echo 'A letra ' . $letra . 'é vogal';
   }else{
    echo 'A letra ' . $letra . 'é consoante';
   }
}else{
    echo 'a letra é obrigatória';
}

?>



</body>
</html>