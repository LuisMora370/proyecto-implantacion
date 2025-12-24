<?php
session_start(); // Iniciar la sesión
require_once '../models/UserModel.php'; // Incluir el modelo de usuario

class AuthController {
    public function login() {
        // Lógica para mostrar el formulario de inicio de sesión
    }

    public function authenticate($username, $password) {
        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: ../main.php'); // Redirigir a la página principal
            exit();
        } else {
            echo "Credenciales incorrectas.";
        }
    }
}
?>
