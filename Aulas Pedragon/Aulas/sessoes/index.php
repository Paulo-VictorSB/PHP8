<?php

session_start();

$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
$apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : '-';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo melhor as sessões</title>
</head>
<body>
    
    <?php require_once('nav.php') ?>
    <hr>
    <h2>Exercício com sessões no PHP</h2>

    <h1>Valor da variável 'nome'</h1>
    <h1><?= $nome ?></strong></h1>

    <h1>Valor da variável 'apelido'</h1>
    <h1><?= $apelido ?></h1>