<?php

$produtos = ['arroz', 'batata', 'laranja'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    
    <ul>
        <?php if($produtos[0] == 'arroz') : ?>        
            <li>Arroz</li>
        <?php endif; ?>

        <?php if($produtos[1] == 'batata') : ?>
            <li>Batata</li>
        <?php endif; ?>

        <?php if($produtos[2] == 'laranja') : ?>
            <li>Laranja</li>
        <?php endif; ?>
    </ul>

    <ul>
    <?php if($produtos) : ?>
        <?php for($i = 0; $i < count($produtos); $i++): ?>
            <li><?= $produtos[$i]; ?></li>
        <?php endfor; ?>
    <?php endif; ?>
    </ul>

    <!-- count(array) // tipo um array.length -->

</body>
</html>