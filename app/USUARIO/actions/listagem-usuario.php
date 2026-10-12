<?php

require_once "../controller/Usuario.php";

$objUsuario = new Usuario();

$res = $objUsuario->buscar();

echo json_encode($res ?: [], JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);