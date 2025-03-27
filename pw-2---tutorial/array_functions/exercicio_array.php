<?php


    $pessoa = [
        [
           'nome' => 'gustavo',
           'idade' => 14

        ];
        [
            'nome ' => 'dipirono',
            'idade' => 33
        ];
        [
            'nome' => 'tati',
            'idade' =>  74

        ]
    ];

    function votar(){
        foreach ($pessoa as $key => $pessoinha) {
            if ($pessoinha['idade'] < 16) {
                echo 'não pode votar' . $pessoinha['nome'];
            }
            else if ($pessoinha['idade'] >=16 && $pessoinha['idade'] <=18 ){
                echo 'voto opcional' . $pessoinha['nome'];
            }else if ($pessoinha['idade'] >=18 && $pessoinha['idade'] <=70) {
                echo 'É obrigatório votar' . $pessoinha['nome'];
            }else {
                echo 'Seu voto é opcional' . $pessoinha['nome'];
            }
                
            }
        }

    

   