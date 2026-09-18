<?php

require_once '../controller/Usuario.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    if (empty($nome) || empty($cidade) || empty($telefone)) {

        echo json_encode([
            'success' => false,
            'message' => 'Por favor, preencha todos os campos obrigatórios.'
        ]);
        exit;
    }

    try {
        $objUsuario = new Usuario();
        $objUsuario->nome = $nome;
        $objUsuario->cidade = $cidade;
        $objUsuario->telefone = $telefone;

        $res = $objUsuario->cadastrar();

        echo json_encode([
            'success' => $res,
            'message' => $res ? 'Cadastrado com Sucesso!' : 'Usuario não Cadastrado!'
        ]);
        exit;
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Erro interno no servidor: ' . $e->getMessage()
        ]);
        exit;
    
    }

}