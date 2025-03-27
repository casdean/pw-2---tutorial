<?php

    $alunos = [
        [
            'nome' => 'marquitos',
            'nota' => 5
        ],
        [
            'nome' => 'julio',
            'nota' => 10
        ]
    ];

    foreach ($alunos as $key => $estudante){  
        echo 'teste';
        if ($estudante['nota'] < 7) 
        echo 'Aluno' . $estudante['nome'] . 'está reprovado';
        
        else
        echo 'Aluno' . $estudante['nome'] . 'está aprovado';
        echo '<br>';
    }
?>