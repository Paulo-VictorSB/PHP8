<?php

// Declara o valor da variavel
$valor = 10;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if($valor == 10) : ?>
        <p>Valor é igual a 10!</p>
    <?php else : ?>
        <p>O valor é diferente de 10</p>
    <?php endif; ?>

    <!-- Se o valor for igual a 10, mostra o primeiro paragrafo, se não, mostra o segundo paragrafo. -->
</body>
</html>
