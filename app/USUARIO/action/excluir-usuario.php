<?php

require '../controller/Usuario.php';

$id_usuario = $_GET['id_usuario'];

$objUser = new Usuario();

$dados = $objUser->delete($id_usuario);

if ($dados) {
    header("Location: ../view/tela-listar.php");
    exit;
} else {
    header("Location: ../view/tela-listar.php");
    exit;
}
?>