<?php
require_once 'conexao_pdo.php';

$consulta = $pdo->query("SELECT nome, telefone, id FROM contatos;");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "
    <tr>
        <td>
            <span> {$linha['nome']} </span>
        </td>

        <td>
            <span> {$linha['telefone']} </span>
        </td>

        <td> <a class='waves-effect waves-light right btn' href='atualizar.php?edit={$linha['id']}&name={$linha['nome']}&tel={$linha['telefone']}'> <i class='material-icons'>edit</i> </a> </td>
        <td> <a class='waves-effect waves-light btn' href='deletar.php?del={$linha['id']}'> <i class='material-icons'>delete</i> </a> </td>
    </tr>
    ";
}

?>
