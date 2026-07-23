<?php

require 'animal.php';

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $raca = $_POST['raca'] ?? '';
    $cor = $_POST['cor'] ?? '';

    $objanimal = new Animal();
    $objanimal->nome = $nome;
    $objanimal->raca = $raca;
    $objanimal->cor = $cor;

    $res = $objanimal->cadastrar();

    echo json_encode([
        'sucess' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Não Cadastrado!'
    ]);

    exit;
}
