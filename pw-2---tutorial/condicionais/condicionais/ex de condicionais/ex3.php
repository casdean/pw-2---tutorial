<?php

    $num = parseInt(prompt('Me diga um número:'));

    if ($num < 100) {
        echo ('seu numero é menor que 100');
    }else if ($num > 100){
        echo ('seu número é maior que 100');
    }else {
        echo ('Favor digitar um número entre 0 e 100');
    }
?>

