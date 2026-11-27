<?php

require '../model/Database.php';

class Carro {
    public ?int $id_carro = null;
    public string $marca = '';
    public string $modelo = '';
    public string $placa = '';

    public function cadastrar() {
        $db = new Database('carro');

        $res = $db->insert([
            "marca" => $this->marca,
            "modelo" => $this->modelo,
            "placa" => $this->placa
        ]);

        return $res;
    }

    public function buscar() {
        $db = new Database('carro');

        $stmt = $db->select();

        return $stmt;
    }

    public function editar_por_id($id) {
        $db = new Database('carro');
        $res = $db->execute("SELECT * FROM carro WHERE id_carro = ?", [$id]);

        return $res ? $res->fetch(\PDO::FETCH_ASSOC) : false;
    }

    public function editar() {
        $db = new Database('carro');

        $res = $db->update(
            "id_carro = '{$this->id_carro}'",
            [
                "marca" => $this->marca,
                "modelo" => $this->modelo,
                "placa" => $this->placa
            ]
        );

        return $res;
    }

    public function buscar_por_id($id_carro) {
        $db = new Database('carro');

        $res = $db->select_one_with_where("id_carro = '{$id_carro}'");

        if ($res) {
            return $res;
        } else {
            return false;
        }
    }

    public function excluir($id_carro) {
        $db =new Database('carro');

        $res = $db->delete("id_carro = '{$id_carro}'");

        return $res;
    }
}
