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

    public function buscar_por_id(){
        $db = new Database('tipo');

        $id_sessao = $_SESSION["tipo_id"] ?? 0;
        $res = $db->select_all_with_where("id_tipo = '{$id_sessao}'");

        return $res;
    }

    public function editar(){
        $db = new Database('tipo');

        $res = $db->update(
            "id_tipo = '{$this->id_tipo}'",
            [
                "tipo" => $this->tipo,
                "marca" => $this->marca,
                "modelo" => $this->modelo,
                "lugares" => $this->lugares
            ]
        );
        return $res;
    }

    public function editar_por_id($id_tipo){
        $db = new Database('tipo');

        $res = $db->select_one_with_where("id_tipo = '{$id_tipo}'");

        if ($res) {
            return $res;
        } else {
            return false;
        }
    }

    public function excluir($id_tipo) {
        $db = new Database('tipo');

        $res = $db->delete("id_tipo = '{$id_tipo}'");

        return $res;
    }
}
