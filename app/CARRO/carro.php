<?php

require 'db.php';

class Carro {
    public int $id;
    public string $marca;
    public string $modelo;
    public string $placa;

    public function cadastrar() {
        $db = new Database('carro');

        $res = $db->insert([
            "marca" => $this->marca,
            "modelo" => $this->modelo,
            "placa" => $this->placa
        ]);

        return $res;
    }
}

?>