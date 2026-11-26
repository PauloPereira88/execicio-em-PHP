<?php 

require '../controller/Moto.php';
header('Content-Type: application/json');

if ( isset($_GET['id']) ) {

    $id = $_GET['id'];
    $objType = new Moto();
    $dados = $objType->editar_por_id($id);

    if( $dados == false ){
        http_response_code(400);
        $array = [
            "status" => 400,
            "msg" => "Moto Inexistente!",
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

if(isset($_POST) && isset($_POST['id_moto'])){

    $id_moto = $_POST['id_moto'];
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $placa = $_POST['placa'] ?? '';

    $objType = new Moto();
    $objType->id_moto = $id_moto;
    $objType->marca = $marca;
    $objType->modelo = $modelo;
    $objType->placa = $placa;

    try {
        $res = $objType->editar();
        $array = [
            "status" => 200,
            "msg" => "Veiculo Atualizado com Sucesso!"
        ];
        echo json_encode($array);
    }
    catch (Exception $err) {
        http_response_code(400);
        $array = [
            "status" => 400,
            "msg" => "Erro ao Atualizar: " . $err->getMessage()
        ];
        echo json_encode($array);
    }
    exit;
}