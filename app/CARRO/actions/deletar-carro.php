<?php 

require '../controller/Carro.php';
header('Content-Type: application/json');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);

    $carro = new Carro();

    $sucesso = $carro->excluir($id);

    if ($sucesso) {
        echo json_encode(['sucesso' => true]);
    } else {
        echo json_encode(['sucesso' => false, 'erro' => 'Não foi Possivel Excluir o Carro do Banco de Dados!']);
    }
} else {
    echo json_encode(['sucesso' => false, 'erro' => 'ID Invalido ou não fornecido!']);
}
