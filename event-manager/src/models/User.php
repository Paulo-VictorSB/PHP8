<?php
require_once '../db/connection.php';

class User
{
    public function login($username, $password)
    {
        global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return true;
        }

        return false;
    }

    public function register($username, $password)
    {
        global $pdo;
        $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
        return $stmt->execute(['username' => $username, 'password' => $password]);
    }

    public function getUserId($username)
    {
        global $pdo;
        $stmt = $pdo->prepare('SELECT id FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user['id'];
    }
}
?>
