<?php
require '../controller/Usuario.php';
header('Content-Type: application/json'); 

if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    $id = intval($_GET['id']);

    $usuario = new Usuario();
    $sucesso = $usuario->excluir($id);

    if ($sucesso) {
        echo json_encode(['sucesso' => true]);
    } else {
        echo json_encode(['sucesso' => false, 'erro' => 'Não foi possível excluir o registro do banco de dados.']);
    }
} else {
    echo json_encode(['sucesso' => false, 'erro' => 'ID inválido ou não fornecido.']);
}
