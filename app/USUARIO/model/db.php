<?php

class Database {
    private $conn;
    private string $host = 'localhost';
    private string $db = 'cadastros';
    private string $user = 'root';
    private string $pass = '';
    private $table;

    public function __construct($table = null) {
        $this->table = $table;
        $this->conectar();
    }

    public function conectar() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->pass);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $th) {
            error_log($th->getMessage());
            die("Erro ao Conectar ao Banco de Dados!");
        }
    }

    public function execute($query, $binds = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($binds);

            return $stmt;
        } catch (\Throwable $th) {
            error_log($th->getMessage());
            return null;
        }
    }

    public function insert($values) {
        try {
            $fields = array_keys($values);
            $params = array_pad([], count($fields), '?');

            $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ' ) VALUES ( ' . implode(',', $params) . ')';

            $res = $this->execute($query, array_values($values));

            return $res ? true : false;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function select($fields='*'){
        
        $query = "SELECT " . $fields . " FROM " . $this->table . ";";
        $res = $this->execute($query);

        $dados = $res->fetchAll(\PDO::FETCH_ASSOC);
        return $res;
    }   
    
    public function select_one_with_where($where = "", $fields = "*"){
        $query = "SELECT {$fields} FROM {$this->table}";
        if (!empty($where)) {
            $query .= " WHERE {$where}";
        }
        $query .= ";";
        $stmt = $this->execute($query, $binds);
        return $stmt ? $stmt->fetch(PDO::FETCH_ASSOC) : false;
    }

    public function select_all_with_where($where = "", $fields = "*"){
        try {
            $query = "SELECT {$fields} FROM {$this->table}";
            if (!empty($where)) {
                $query .= " WHERE {$where}";
            }
            $query .= ";";
            $stmt = $this->execute($query, $binds);
            return $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update($data){
        
        $id = array_shift($data);
        
        $fields = array_keys($data);

        $setClause = implode('=?, ', $fields) . '=?';

        $query = "UPDATE " . $this->table . " SET " . $setClause . " WHERE id_" . $this->table . " = ?";

        $binds = array_values($data);
        $binds[] = $id; 

        $res = $this->execute($query, $binds);
        
        return $res ? true : false;
    }
    
}

?>