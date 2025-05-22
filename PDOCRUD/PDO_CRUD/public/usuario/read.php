<?php 
    include '../../config/connection.php'; 

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll();

    // echo "<pre>";
    // echo var_dump($usuarios);
?>

    <?php foreach ($usuarios as $indice => $user) { ?>
        <p>
            <strong>Nome da Heroina:</strong><?php echo $user['username']; ?>
            <a href="http://localhost/ETEC/PWII-DIVB/PDO_CRUD/public/usuario/delete.php?id=<?php echo $user['id']; ?>">Remover</a>
            <a href="http://localhost/ETEC/PWII-DIVB/PDO_CRUD/public/usuario/update.php?id=<?php echo $user['id']; ?>">Editar</a>
        </p>
        <hr>
    <?php } ?>
    
