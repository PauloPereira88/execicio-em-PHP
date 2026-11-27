<?php

require '../model/Database.php';

class Moto {
    public ?int $id_moto = null;
    public string $marca = '';
    public string $modelo = '';
    public string $placa = '';

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

    public function editar_por_id($id) {
        $db = new Database('moto');
        $res = $db->execute("SELECT * FROM moto WHERE id_moto = ?", [$id]);

        return $res ? $res->fetch(\PDO::FETCH_ASSOC) : false;
    }

    public function editar() {
        $db = new Database('moto');

        $res = $db->update(
            "id_moto = '{$this->id_moto}'",
            [
                "marca" => $this->marca,
                "modelo" => $this->modelo,
                "placa" => $this->placa
            ]
        );
        
        return $res;
    }

    public function buscar_por_id($id_moto) {
        $db = new Database('moto');

        $res = $db->select_one_with_where("id_moto = '{$id_moto}'");

        if ($res) {
            return $res;
        } else {
            return false;
        }
    }

    public function excluir($id_moto) {
        $db = new Database('moto');

        $res = $db->delete("id_moto = '{$id_moto}'");

        return $res;
    }
}
