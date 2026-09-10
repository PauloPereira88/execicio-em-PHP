<?php

class Database {
    private $conn;
    private string $host = 'localhost';
    private string $db = 'veiculo';
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
            echo "<pre>";
            print_r($th->getMessage());
            echo "</pre>";
        }
    }

    public function execute($query, $binds = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($binds);

            return $stmt;
        } catch (\throwable $th) {
            echo "<pre>";
            print_r($th->getMessage());
            echo "</pre>";
        }
    }

    public function insert($values) {
        try {
            $fields = array_keys($values);
            $params = array_pad([], count($fields), '?');

            $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ' ) VALUES ( ' . implode(',', $binds) . ' )';

            $res = $this->execute($query, array_values($values));

            return $res ? true : false;
        } catch (\throwable $th) {
            return false;
        }
    }

    public function select($fields = '*'){
        
        $query = "SELECT " . $fields . " FROM " . $this->table . ";";
        $res = $this->execute($query);

        $dados = $res->fetchAll(\PDO::FETCH_ASSOC);
    }   
    
    public function select_one_with_where($where = "", $fields = "*"){
        $query = "SELECT {$fields} FROM {$this->table}";
        if (!empty($where)) {
            $query .= " WHERE {$where}";
        }
        $query .= ";";
        $stmt = $this->conn->query($query);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function select_all_with_where($where = "", $fields = "*"){
        try {
            $query = "SELECT {$fields} FROM {$this->table}";
            if (!empty($where)) {
                $query .= " WHERE {$where}";
            }
            $query .= ";";
            $stmt = $this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\throwable $th) {
            throw $th;
        }
    }
        
    
}

?>