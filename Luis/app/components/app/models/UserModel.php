<?php
require_once '../../../config/connection/db_connection.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = getConnection(); // Usar la función de conexión
    }

    public function getUserByUsername($username) {
        // Obtener el usuario por nombre de usuario
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
