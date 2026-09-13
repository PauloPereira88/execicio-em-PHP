<?php 

require "../controller/Usuario.php";

header ('Content-Type: application/json; charset=utf-8');

$objUsuario = new Usuario();

$res = $objUsuario->buscar();

echo json_encode($res);