<?php

    $alunos = [
        'seleide da silva',
        'pombinha',
        'dipirono'

    ];

    dizerOla($alunos);

    function votar($estudantes){
        foreach ($estudantes as $key => $estudante) {
            echo "<h1>$estudante</h1>";
        }
    }

    
        
    