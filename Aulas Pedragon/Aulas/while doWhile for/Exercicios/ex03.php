<?php 

    # imagine que você tem uma lista de compras com 5 itens. Crie um array com esses itens e use o while para exibilos dentro de uma ul no html

    $lista = ['arroz', 'coca-cola', 'feijão', 'picanha', 'queijo'];
    $i = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    
    <ul>

    <?php while($i < count($lista)):?>
        <li><?=$lista[$i]?></li>
        <?php $i++;?>
    <?php endwhile;?>

    </ul>

</body>
</html>