<?php
class UserModel {
    private PDO $conn;
    private string $table_name = "usuarios";

    public function __construct(PDO $db) {
        $this->conn = $db;
    }

    public function obtenerUsuarios(): PDOStatement {
        $query = "SELECT id, nombre, email FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>