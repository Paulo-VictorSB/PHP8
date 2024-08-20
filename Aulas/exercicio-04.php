<?php

    $nome = 'joao'

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if($nome == 'joao'):?>
        <?="o nome é joao"?>
    <?php elseif($nome == 'ana'): ?>
        <?="o nome é ana"?>
    <?php elseif($nome == 'carlos'): ?>
        <?="o nome é carlos"?>
    <?php else: ?>
        <?='nome desconhecido'?>
    <?php endif; ?>

</body>
</html>