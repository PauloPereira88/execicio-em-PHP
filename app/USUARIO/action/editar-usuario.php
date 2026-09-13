<?php
require '../controller/Usuario.php';

header('Content-Type: application/json');

if( isset($_GET['id']) ) {

    $id = $_GET['id'];
    $objUser = new Usuario();
    $dados = $objUser->editar_por_id($id);

    if( $dados == false ){
        $array = [
            "status" => 400,
            "msg" => "Usuario Inexistente!",
        ];
        print_r($array);
        exit;
    } else {
        $array = [
            "status" => 200,
            "msg" => "Dados Requisitados com Sucesso!",
            "data" => $dados
        ];
    }
    echo json_encode($array);
}

if(isset($_POST) && isset($_POST['id_usuario'])) {

    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    if (empyt($id_usuario) || empyt($nome)) {
        echo json_encode([
            "status" => 400,
            "msg" => "O ID eo Nome são Campos Obrigatórios."
        ]);
        exit;
    }

    $objUsuario = new Usuario();
    $objUsuario->id_usuario = $id_usuario;
    $objUsuario->nome = $nome;
    $objUsuario->cidade = $cidade;
    $objUsuario->telefone = $telefone;

    try {
        $res = $objUsuario->editar();
        $array = [
            "status" => 200,
            "msg" => "Usuario  Atualizado com Sucesso!"
        ];
        echo json_encode($array);
    }
    catch(Exception $err) {
        $array = [
            "status" => 400,
            "msg" => $err
        ];

        echo json_encode($array);
        exit;
    } catch (Exception $err) {
        $array = [
            "status" => 400,
            "msg" => "Erro ao Atualizar: " .  $err->getMessage()
        ];
        echo json_encode($array);
        exit;
    }
}

echo json_encode([
    "status" => 400,
    "msg" => "Requisição Invalida."
]);
exit;