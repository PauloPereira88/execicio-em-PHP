<?php

require '../model/Database.php';

class Moto {
    public int $id = null;
    public string $marca;
    public string $modelo;
    public string $placa;

    public function cadastrar() {
        $db = new Database('moto');

        $res = $db->insert([
            "marca" => $this->marca,
            "modelo" => $this->modelo,
            "placa" => $this->placa
        ]);

        return $res;
    }

    public function buscar() {
        $db = new Database('moto');

        $stmt = $db->select();

        return $stmt;
    }
}

?>