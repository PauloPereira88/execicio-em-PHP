<?php

require 'db.php';

class Onibus {
    public int $id;
    public string $tipo;
    public string $marca;
    public string $modelo;
    public string $lugares;

    public function cadastrar() {
        $db = new Database('tipo');

        $res = $db->insert([
            "tipo" => $this->tipo,
            "marca" => $this->marca,
            "modelo" => $this->modelo,
            "lugares" => $this->lugares
        ]);

        return $res;
    }
}

?>