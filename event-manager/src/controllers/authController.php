<?php
session_start();
require_once '../models/User.php';

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $user = new User();
            if ($user->login($username, $password)) {
                $_SESSION['user_id'] = $user->getUserId($username);
                $_SESSION['username'] = $username;
                header('Location: ../../index.php');
                exit;
            } else {
                $_SESSION['error'] = 'Usuário ou senha inválidos!';
            }
        }

        include '../views/auth/login.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $user = new User();
            if ($user->register($username, $passwordHash)) {
                $_SESSION['success'] = 'Cadastro realizado com sucesso!';
                header('Location: login.php');
                exit;
            } else {
                $_SESSION['error'] = 'Erro ao registrar usuário!';
            }
        }

        include '../views/auth/register.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: ../../src/views/auth/login.php');
        exit;
    }
}
?>
