<?php 

require '../controller/Moto.php';
header('Content-Type: application/json');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);

    $moto = new Moto();

    $sucesso = $moto->excluir($id);

    if ($sucesso) {
        echo json_encode(['sucesso' => true]);
    } else {
        echo json_encode(['sucesso' => false, 'erro' => 'Não foi Possivel Excluir a Moto do Banco de Dados!']);
    }
} else {
    echo json_encode(['sucesso' => false, 'erro' => 'ID Invalido ou não fornecido!']);
}
