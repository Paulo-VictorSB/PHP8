<?php
    session_start();
    session_unset();
    session_destroy();
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
    <h2>Os valores da sessão foram destruidos.</h2>

</body>
</html>