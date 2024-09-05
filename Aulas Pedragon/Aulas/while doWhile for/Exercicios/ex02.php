<?php

    # construa uma table no html que mostre a tabuada doo até o 20

    $contador = 1
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela da mutiplicação</title>
</head>
<body>
    
    <table>
    <?php while($contador <= 20):?>
        <tr>
            <td>2</td>
            <td>x</td>
            <td><?=$contador?></td>
            <td>=</td>
            <td><?= 2 * $contador?></td>
        </tr>
        <?php $contador++; ?>
    <?php endwhile; ?>
    </table>

</body>
</html>