<?php

class Database {
    private $conn;
    private string $host = 'localhost';
    private string $db = 'cadastros';
    private string $user = 'root';
    private string $pass = '';
    private $table;

    function __construct($table = null) {
        $this->table = $table;
        $this->conectar();
    }

    public function conectar() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->local . ";dbname=" . $this->db, $this->user, $this->pass);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;

        } catch (\PDOException $erro) {
            return false;
        }
    }

    public function execute($query, $params = []) {
        try {
            $command = $this->conn->prepare($query);
            $command->execute($params);
            return $command;

        } catch (\PDOException $erro) {
            return false;
        }
    }

    public function insert($values) {
        try {
            $fields = array_keys($values);
            $params = array_pad([], count($fields), '?');

            $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $params) . ')';
            $res = $this->execute($query, array_values($values));
            return $res ? true : false;
            
        } catch (\Throwable $th) {
            return false;
        }
    }
}