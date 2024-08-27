<?php 

    # Crie uma apresentação no HTML que mostra a tábuada de 5 :
    # 5 x 1 = 5
    # 5 x 2 = 10
    # 5 x 3 = 15
    # ----------

    $a = 5;
    for($i = 1; $i <= 10; $i++){
        $resultado = $i*$a;
        echo "$a x $i = $resultado <br>";
    };
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tábuada de 5</title>
</head>
<body>
    
    <?php $a = 5?>
    <?php for($i = 1; $i <= 10; $i++) :?>
        <?php $resultado = $a * $i ?>
        <p><?=$a?> x <?=$i?> = <?=$resultado?></p>
    <?php endfor; ?>

</body>
</html>