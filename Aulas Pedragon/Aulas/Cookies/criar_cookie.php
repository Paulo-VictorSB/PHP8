<?php

$nome = 'meu_cookie';
$valor = 'conteudo_do_meu_cookie';
$expiracao = 3600; // 1 Hora de duração
setcookie($nome, $valor, time() + $expiracao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
    <?php require_once('nav.php');?>

    <h1>Inicio</h1>
    <hr>
    <p>Cookie criado com sucesso!</p>

</body>
</html>