<?php 
 require_once("interfaces_abstract/DatabaseConnection.php");
 class MySQLConnection extends DatabaseConnection {
    public function __construct() {
        $this->host = "localhost";
        $this->dbname = "thuctap";
        $this->username = "root";
        $this->password = "";
    }
 public function connect() {
    try {
        $conn = new PDO(
            "mysql:host={$this->host};dbname={$this->dbname};charset=utf8", 
            $this->username, 
            $this->password
        );
        echo "Kết nối thành công!";
        return $conn;
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
        return null;
    }
 }
}