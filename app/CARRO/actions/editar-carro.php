<?php 

require '../controller/Carro.php';
header('Content-Type: application/json');

if ( isset($_GET['id']) ) {

    $id = $_GET['id'];
    $objType = new Carro();
    $dados = $objType->editar_por_id($id);

    if( $dados == false ){
        http_response_code(400);
        $array = [
            "status" => 400,
            "msg" => "Carro Inexistente!",
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

if(isset($_POST) && isset($_POST['id_carro'])){

    $id_carro = $_POST['id_carro'];
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $placa = $_POST['placa'] ?? '';

    $objType = new Carro();
    $objType->id_carro = (int) $id_carro;
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