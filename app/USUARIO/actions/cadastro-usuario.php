<?php

require '../controller/Usuario.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    if (empty($nome) || empty($cidade) || empty($telefone)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Por favor, preencha todos os campos obrigatórios.'
        ]);
        exit;
    }

    $objUsuario = new Usuario();
    $objUsuario->nome = $nome;
    $objUsuario->cidade = $cidade;
    $objUsuario->telefone = $telefone;

    $res = $objUsuario->cadastrar();

    echo json_encode([
        'sucess' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Usuario não Cadastrado!'
    ]);
    exit;

}