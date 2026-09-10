<?php

require 'db.php';

class Animal {
    public int $id;
    public string $nome;
    public string $raca;
    public string $cor;

    public function cadastrar() {
        $db = new Database('animal');

        $res = $db->insert([
            "nome" => $this->nome,
            "raca" => $this->raca,
            "cor" => $this->cor
        ]);

        return $res;
    }
}

?>