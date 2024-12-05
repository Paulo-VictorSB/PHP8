<?php

    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com'
    ];

    $cidade = 'porto';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($lojas[$cidade])): ?>
        <p><?="O email da loja de " . $cidade . " ". " é " . $lojas[$cidade]?></p>
    <?php else: ?>
        <?= "Email desconhecido"?>
    <?php endif; ?>

</body>
</html>

