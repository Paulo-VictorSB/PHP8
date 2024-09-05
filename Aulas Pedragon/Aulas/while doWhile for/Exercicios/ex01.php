<?php

    # contador simples
    $contagem = 1;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador simples</title>
</head>
<body>
    
    <?php while($contagem <= 10):?>
        <p><?= $contagem ?></p>
        <?php $contagem++?>
    <?php endwhile;?>

</body>
</html>