<?php

require 'db.php';

class Usuario {
    public int $id;
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
}

?>