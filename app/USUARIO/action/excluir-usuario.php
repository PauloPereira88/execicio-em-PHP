<?php

require '../controller/Usuario.php';

$id_usuario = $_GET['id_usuario'];

$objUser = new Usuario();

$dados = $objUser->delete($id_usuario);

if ($dados) {
    echo "<script>alert('Usuário deletado com sucesso!');</script>";
    header("Location: ../view/tela-listar.php");
    exit;
} else {
    echo "<script>alert('Usuário não deletado!');</script>";
    header("Location: ../view/tela-listar.php");
    exit;
}
?>