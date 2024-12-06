<?php

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

$username = isset($_POST['text_username']) ? $_POST['text_username'] : '';
$password = isset($_POST['text_password']) ? $_POST['text_password'] : '';

$user = [
    "username" => "joao",
    "password" => "aaa"
];

if ($username == $user['username'] && $password == $user['password']) {
    echo '<h1>LOGIN OK</h1>';
} else {
    echo '<h1>LOGIN INVÁLIDO</h1>';
}
echo '<a href="./index.php">Voltar</a>';