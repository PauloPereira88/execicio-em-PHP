<?php

require_once "../controller/Moto.php";

$objMoto = new Moto();

$res = $objMoto->buscar();

echo json_encode($res ?: [], JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);