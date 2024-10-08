<?php

    /* 
    Apresenta a frase abaixo 10 vezes, com uma opacidade cada vez MENOR até ser quase invisível
    
    É um exercício de utilização de um ciclo para repetir um texto e, ao mesmo tempo
    alterar o valor da opacidade do estilo de letra.

    Deve usar o atributo style para o efeito visual.
    */

    $frase = "Esta frase vai aparecer com diferentes opacidades.";
    for ($i = 10; $i > 0; $i--) {
    echo $i == 10 
        ? "<h1 style='opacity: 1'>$frase</h1>" 
        : "<h1 style='opacity: 0.$i'>$frase</h1>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1 style="opacity: 0.0;">Paulo</h1>

</body>
</html>