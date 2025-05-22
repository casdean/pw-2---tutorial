<?php
include '../../config/connection.php';
//voltando niveis para encontrar o arquivo 
?>
<form action ="create.php" method="POST">
<label for = "username">Nome de usuário </label>
<input type="text" name="username" id="username">
<br><br>
<label for = "password">Senha</label>
<input type="password" name="password" id="password">
<br><br>
<button type="submit">Cadastrar</button>
</form>
<?php

$username = isset($_POST['username'])? $_POST['username']: exit();
$password = isset($_POST['password'])? $_POST['password']: exit();
//statement
$stmt = $pdo->prepare('INSERT INTO usuario (id,username,password) VALUES (:username,:password)');//: para não ser hackado!!!!! O.O
//preparar para insirir dados no  
$stmt->bindParam(':username', $username);//para hackear delete * form usuario
$stmt->bindParam(':password', $password);
$stmt->execute();

Header("Location: read.php");

?>