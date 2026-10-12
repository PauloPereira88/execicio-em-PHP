<?php

require '../controller/Tipo.php';

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $tipo = $_POST['tipo'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $lugares = $_POST['lugares'] ?? '';

    $objTipo = new Tipo();
    $objTipo->tipo = $tipo;
    $objTipo->marca = $marca;
    $objTipo->modelo = $modelo;
    $objTipo->lugares = $lugares;

    $res = $objTipo->cadastrar();

    echo json_encode([
        'success' => $res,
        'message' => $res ? 'Cadastrado com Sucesso!' : 'Não Cadastrado!'
    ]);

    exit;
}