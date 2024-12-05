<?php
require_once('config.php');

function saveToFile($filename, $user, $password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $line = $user . ":" . $hashedPassword . PHP_EOL;
    file_put_contents($filename, $line, FILE_APPEND);
}

function readFromFile($filename) {
    $accounts = [];
    if (file_exists($filename)) {
        $lines = file($filename, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            list($user, $hashedPassword) = explode(":", $line);
            $accounts[$user] = $hashedPassword;
        }
    }
    return $accounts;
}

function createNewUser($user, $password) {
    $accounts = readFromFile('accounts.txt');
    
    if (array_key_exists($user, $accounts)) {
        return "Usuário já existe!";
    }

    saveToFile('accounts.txt', $user, $password);
    return "Usuário registrado com sucesso!";
}

function loginUser($user, $password) {
    $accounts = readFromFile('accounts.txt');

    if (array_key_exists($user, $accounts) && password_verify($password, $accounts[$user])) {
        $_SESSION['user'] = $user;
        header("Location: welcome.php");
        exit();
    } else {
        return "Usuário ou senha inválidos!";
    }
}

function isLoggedIn() {
    return isset($_SESSION['user']);
}

function logout() {
    session_unset();
    session_destroy();
    header("Location: login.php");
}
?>
