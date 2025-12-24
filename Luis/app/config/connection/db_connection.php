<?php
function getConnection() {
    $host = 'localhost';
    $dbname = 'inventario';
    $username = 'usuario'; // Cambiar por el nombre de usuario real
    $password = 'contraseña'; // Cambiar por la contraseña real

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
