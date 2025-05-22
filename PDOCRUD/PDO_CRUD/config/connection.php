<?php
//configuração da conexão com banco de dados

$host = 'localhost'; //se tivesse seu site https://blabla.com.br
$database = 'escola';
$user = 'root';
$password = ''; //não tem senha o xampp é vazio

//realizando conexão com BD por meio
//do plugin PHP PDO
try {
    $pdo =  new PDO ("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    // está usando uma biblioteca do php que faz conexão com o BD
} catch (PDOException $erro) {
   //catch = capturar ou pegar alguma  coisa ^-^
   die("Erro de conexão:" . $erro->getMessage()); //O.O get pega a menssagem e exibe/ 
}













?>