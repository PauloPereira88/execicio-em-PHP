<?php

require '../controller/Tipo.php';
header('Content-Type: application/json');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);

    $tipo = new Tipo();
    $sucesso = $tipo->excluir($id);

    if($sucesso) {
        echo json_encode(['sucesso' => true]);
    } else {
        echo json_encode(['sucesso' => false, 'erro' => 'Não foi Possivel Excluir o Veiculo do Banco de dados!']);
    }
} else {
    echo json_encode(['sucesso' => false, 'erro' => 'ID Invalido ou não Fornecido!']);
}