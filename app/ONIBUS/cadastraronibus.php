<?php

require 'onibus.php';

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $tipo = $_POST['tipo'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $lugares = $_POST['lugares'] ?? '';

    $objonibus = new onibus();
    $objonibus->tipo = $tipo;
    $objonibus->marca = $marca;
    $objonibus->modelo = $modelo;
    $objonibus->lugares = $lugares;

    $res = $objonibus->cadastrar();

    echo json_encode([
        'sucess' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Não Cadastrado!'
    ]);

    exit;
}