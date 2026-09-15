<?php
require '../controller/Usuario.php';

header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $id_usuario = $_GET['id_usuario'];

    if ($id_usuario) {
        $usuario = new Usuario();
        $dados = $usuario->buscar_por_id($id_usuario);

        if (!empty($dados)) {
            echo json_encode(["status" => 200, "data" => $dados]);
        } else {
            echo json_encode(["status" => 400, "msg" => "Usuario não Encontrado"]);
        }
        exit;
    }
    echo json_encode(["status" => 400, "msg" => "Parametros Invalidos!"]);
    exit;
}

if(isset($_POST) && isset($_POST['id_usuario'])) {

    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    $objUsuario = new Usuario();
    $objUsuario->id_usuario = $id_usuario;
    $objUsuario->nome = $nome;
    $objUsuario->cidade = $cidade;
    $objUsuario->telefone = $telefone;

    try {
        $res = $objUsuario->editar();
        
        if ($res) {
            $array = [
                "status" => 200,
                "msg" => 'Usuario Atualizado com Sucesso!'
            ];
        } else {
            $array = [
                "status" => 400,
                "msg" => 'Erro ao Editar Usuario!'
            ];
        }

        echo json_encode($array);
    }
    catch (Exception $err) {
        $array = [
            "status" => 400,
            "msg" => $err
        ];
        echo json_encode($array);
    }
}