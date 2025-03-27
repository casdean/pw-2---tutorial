<script>

    let nota = parseFloat(prompt('insira sua nota:'));

    if (nota > 7 && nota <=10) {
        console.log ('Você está aprovado')
    }else if(nota > 6 && nota <=7){
        console.log('Você está em recuperação')
    }else if(nota <6){
        console.log('Você está reprovado')
    }else{
        console.log('Insira um número entre 0 e 10')
    }
</script>