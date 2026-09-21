<?php

require '../model/Database.php';

class Usuario {
    
    public ?int $id_usuario = null;
    public string $nome;
    public string $cidade;
    public string $telefone;

    public function cadastrar() {
        $db = new Database('usuario');

        $res = $db->insert([
            "nome" => $this->nome,
            "cidade" => $this->cidade,
            "telefone" => $this->telefone
        ]);

        return $res;
    }

    public function buscar(){
        $db = new Database('usuario');

        $stmt = $db->select();

        return $stmt;
    }

    public function buscar_por_id() {
        $db = new Database('usuario');

        $id_sessao = $_SESSION["usuario_id"] ?? 0;
        $res = $db->select_all_with_where("id_usuario = '{$id_sessao}'");

        return $res;
    }

    public function editar() {
        $db = new Database('usuario');

        $res = $db->update(
            "id_usuario = '{$this->id_usuario}'",
            [
                "nome" => $this->nome,
                "cidade" => $this->cidade,
                "telefone" => $this->telefone
            ]
        );

        return $res;
    }

    public function editar_por_id($id_user) {
        $db = new Database('usuario');

        $res = $db->select_one_with_where("id_usuario = '{$id_user}'");

        if ($res) {
            return $res;
        } else {
            return false;
        }
    }
}