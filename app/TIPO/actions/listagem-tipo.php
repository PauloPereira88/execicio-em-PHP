<?php

require_once "../controller/Tipo.php";

$objTipo = new Tipo();

$res = $objTipo->buscar();

echo json_encode($res ?: [], JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);