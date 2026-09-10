<?php

require 'carro.php';

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $placa = $_POST['placa'] ?? '';

    $objcarro = new Carro();
    $objcarro->marca = $marca;
    $objcarro->modelo = $modelo;
    $objcarro->placa = $placa;

    $res = $objcarro->cadastrar();

    echo json_encode([
        'sucess' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Não Cadastrado!'
    ]);

    exit;
}
