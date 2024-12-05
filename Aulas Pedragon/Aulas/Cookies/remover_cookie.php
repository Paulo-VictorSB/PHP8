<?php

$nome = 'meu_cookie';
setcookie($nome, '', time() - 1);

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
    <p>Cookie eliminado com sucesso!</p>

</body>
</html>