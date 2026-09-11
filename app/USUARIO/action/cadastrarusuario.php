<?php

require '../controller/Usuario.php';

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    $objUsuario = new Usuario();
    $objUsuario->nome = $nome;
    $objUsuario->cidade = $cidade;
    $objUsuario->telefone = $telefone;

    $res = $objUsuario->cadastrar();

    echo json_encode([
        'success' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Não Cadastrado!'
    ]);

    exit;
}