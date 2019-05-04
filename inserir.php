<?php
    try {
        if (isset($_REQUEST['nome']) ?  $nome = $_REQUEST['nome'] : $nome = '');
        if (isset($_REQUEST['telefone']) ?  $telefone = $_REQUEST['telefone'] : $telefone = '');

        require_once 'conexao_pdo.php';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('INSERT INTO contatos (nome,telefone) VALUES(:nome,:telefone)');
        $stmt->execute(array(
            ':nome' => $nome,
            ':telefone' => $telefone
        ));

        echo $stmt->rowCount();
        header('location: index.php');
        
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>
