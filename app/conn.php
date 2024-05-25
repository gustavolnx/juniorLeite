<?php
require_once 'config.php';

class Database {
    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Configura o PDO para lançar exceções em caso de erro
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Configura o PDO para trabalhar com UTF-8
            $this->connection->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erro de conexão: " . $exception->getMessage();
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}


// Criar uma instância da classe Database
$database = new Database();


$db = $database->getConnection();
?>
