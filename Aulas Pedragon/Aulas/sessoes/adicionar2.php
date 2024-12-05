<?php
session_start();
$_SESSION['apelido'] = 'Victor';
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
    <h2>O Valor de 'apelido' adicionado a sessão.</h2>

</body>
</html>