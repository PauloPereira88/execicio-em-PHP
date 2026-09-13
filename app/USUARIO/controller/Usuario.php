<?php

require '../model/db.php';

class Usuario {
    
    public $id_usuario;
    public $nome;
    public $cidade;
    public $telefone;

    private $table_name = "usuario";
    private $conn;

    public function cadastrar() {
        $db = new Database($this->table_name);

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

        // return $stmt;

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function buscar_por_id($id_sessao){
        $db = new Database($this->table_name);

        return $db->select_all_with_where("id_usuario = ?", [$id_sessao]);

    }

    public function editar(){
        $db = new Database($this->table_name);

        $res = $db->update([
                "nome" => $this->nome,
                "cidade" => $this->cidade,
                "telefone" => $this->telefone
            ],
            "id_usuario = " . (int)$this->id_usuario
        );

        return $res;

    }

    public function editar_por_id($id_user) {
        $db = new Database('usuario');

        return $this->buscar_por_id($id_user);
    }

    public function delete() {
        $db = new Database($this->table_name);

        return $db->delete_with_where("id_usuario = ?", [$this->id_usuario]);
    }

}

?>