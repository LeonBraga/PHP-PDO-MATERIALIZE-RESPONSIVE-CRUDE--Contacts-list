<?php

    if (isset($_REQUEST['del'])) {

        $id_recebido = (int)$_GET['del'];

        try {
            require_once 'conexao_pdo.php';
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('DELETE FROM contatos WHERE id = :id');
            $stmt->bindParam(':id', $id_recebido);
            $stmt->execute();

            echo $stmt->rowCount();

            header('location: index.php');

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

?>
