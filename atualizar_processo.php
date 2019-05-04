<?php

if (isset($_REQUEST['id_at']) ?  $idatual = $_REQUEST['id_at'] : $idatual = '');
if (isset($_REQUEST['nome_at']) ?  $nvnome = $_REQUEST['nome_at'] : $nvnome = '');
if (isset($_REQUEST['telefone_at']) ?  $nvtel = $_REQUEST['telefone_at'] : $nvtel = '');



    try {

        require_once 'conexao_pdo.php';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('UPDATE contatos SET nome = :nome, telefone = :telefone WHERE id = :id');
        $stmt->execute(array(
            ':id'   => $idatual,
            ':nome' => $nvnome,
            ':telefone'   => $nvtel
        ));

        echo $stmt->rowCount();
        header('location: index.php');

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    ?>