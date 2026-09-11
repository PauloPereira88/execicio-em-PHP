<?php 

require "../controller/Usuario.php";

$objUsuario = new Usuario();

$res = $objUsuario->buscar();

echo json_encode($res);