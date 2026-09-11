<?php

require '../model/db.php';

class Usuario {
    public int $id_usuario;
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

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function buscar_por_id($id_sessao){
        $db = new Database('usuario');

        return $db->select_all_with_where("id_usuario = ?", [$id_sessao]);

    }

    public function editar(){
        $db = new Database('usuario');

        return $db->update([
            "id_usuario" => $this->id_usuario,
            "nome" => $this->nome,
            "cidade" => $this->cidade,
            "telefone" => $this->telefone,
        ]);

    }

    public function editar_por_id($id_user) {
        $db = new Database('usuario');

        return $db->select_one_with_where("id_usuario = ?", [$id_user]);
    }

}

?>