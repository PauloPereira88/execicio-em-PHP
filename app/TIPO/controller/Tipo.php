<?php

require '../model/Database.php';

class Tipo {
    public ?int $id_tipo = null;
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

    public function buscar() {
        $db = new Database('tipo');

        $stmt = $db->select();

        return $stmt;
    }

    public function editar_por_id($id) {
        $db = new Database('tipo');
        $res = $db->execute("SELECT * FROM tipo WHERE id_tipo = ?", [$id]);

        return $res ? $res->fetch(\PDO::FETCH_ASSOC) : false;
    }
}
