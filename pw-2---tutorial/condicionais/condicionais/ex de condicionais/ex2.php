<script>

let idade= parseInt(prompt("insira sua idade:"))

if (idade<16){
    alert("você não pode votar ainda, espere mais uns anos")
}
else if (idade>=16 && idade<18){
    alert("você não é obrigado a votar, mas sinta-se a vontade!")
}
else if (idade>=18 && idade<70){
    alert("você é obrigado a votar")
}else{
    alert("votar é opcional")
}


</script>