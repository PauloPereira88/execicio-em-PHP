<?php

require 'moto.php';

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $placa = $_POST['placa'] ?? '';

    $objmoto = new Moto();
    $objmoto->marca = $marca;
    $objmoto->modelo = $modelo;
    $objmoto->placa = $placa;

    $res = $objmoto->cadastrar();

    echo json_encode([
        'sucess' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Não Cadastrado!'
    ]);

    exit;
}