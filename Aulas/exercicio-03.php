<?php

    $produtos = ['arroz', 'feijão', 'batata', 'laranja', 'castanha'];
    sort($produtos)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach ($produtos as $produto): ?>
        <li><?= $produto ?></li>
    <?php endforeach; ?>

    <ul>
        <li><?= $produtos[0]?></li>
        <li><?= $produtos[1]?></li>
        <li><?= $produtos[2]?></li>
        <li><?= $produtos[3]?></li>
        <li><?= $produtos[4]?></li>
    </ul>
        
    </body>
</html>