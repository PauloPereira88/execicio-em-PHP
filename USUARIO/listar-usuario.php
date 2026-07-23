<?php
 
    require 'usuario.php';

    $objusuario = new usuario();

    $res = $objusuario->buscar();

    echo json_encode($res);

?>