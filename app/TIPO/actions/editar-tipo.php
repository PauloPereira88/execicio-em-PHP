<?php 

require '../controller/Tipo.php';
header('Content-Type: application/json');

if ( isset ($_GET['id'] ) ) {

    $id = $_GET['id'];
    $objType = new Tipo();
    $dados = $objType->editar_por_id($id);

    if( $dados == false ){
        http_response_code(400);
        $array = [
            "status" => 400,
            "msg" => "Usuario Inexistente!",
        ];
    }else{
        $array = [
            "status" => 200,
            "msg" => "Dados Requisitados com Sucesso!",
            "data" => $dados
        ];
    }
    echo json_encode($array);
    exit;
}