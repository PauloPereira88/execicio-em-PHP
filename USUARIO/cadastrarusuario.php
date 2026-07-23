<?php

require 'usuario.php';

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    $objusuario = new usuario();
    $objusuario->nome = $nome;
    $objusuario->cidade = $cidade;
    $objusuario->telefone = $telefone;

    $res = $objusuario->cadastrar();

    echo json_encode([
        'sucess' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Não Cadastrado!'
    ]);

    exit;
}