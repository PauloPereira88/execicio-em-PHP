<?php

require_once "../controller/Carro.php";

$objCarro = new Carro();

$res = $objCarro->buscar();

echo json_encode($res ?: [], JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);