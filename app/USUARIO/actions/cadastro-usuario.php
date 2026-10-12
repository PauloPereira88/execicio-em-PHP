<?php

require '../controller/Usuario.php';

header('Content-Type: application/json');

function somenteNumeros($valor) {
    return preg_replace('/\D/', '', $valor ?? '');
}

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $telefone = somenteNumeros($_POST['telefone']) ?? '';

    $objUsuario = new Usuario();
    $objUsuario->nome = $nome;
    $objUsuario->cidade = $cidade;
    $objUsuario->telefone = $telefone;

    $res = $objUsuario->cadastrar();

    echo json_encode([
        'success' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Usuario não Cadastrado!'
    ]);

}