<?php 

require '../controller/Tipo.php';
header('Content-Type: application/json');

if ( isset($_GET['id']) ) {

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

if(isset($_POST) && isset($_POST['id_tipo'])){

    $id_tipo = $_POST['id_tipo'];
    $tipo = $_POST['tipo'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $lugares = $_POST['lugares'] ?? '';

    $objType = new Tipo();
    $objType->id_tipo = $id_tipo;
    $objType->tipo = $tipo;
    $objType->marca = $marca;
    $objType->modelo = $modelo;
    $objType->lugares = $lugares;

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