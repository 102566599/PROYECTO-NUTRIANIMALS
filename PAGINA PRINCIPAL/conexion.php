<?php

class Connection {
    private $server = "localhost";
    private $database = "proyecto_base";
    private $username = "root";
    private $password = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $conn;

    public function open() {
        try {
            $this->conn = new PDO("mysql:host={$this->server};dbname={$this->database}", $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Hubo un problema con la conexión: " . $e->getMessage();
        }
    }

    public function close() {
        $this->conn = null;
    }
}
