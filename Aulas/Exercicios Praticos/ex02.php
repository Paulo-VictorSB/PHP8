<?php

    /* 
    1. Constrói um array com todos os resultados da tabuáda dos 327.
    2. Apresenta os dados do array com um ciclo foreach (apenas os valores)
    */

    $tabuada = [
        '327 x 1' => '327',
        '327 x 2' => '654',
        '327 x 3' => '981',
        '327 x 4' => '1308',
        '327 x 5' => '1635',
        '327 x 6' => '1962',
        '327 x 7' => '2289',
        '327 x 8' => '2616',
        '327 x 9' => '2943',
        '327 x 10' => '3270'
    ];

    foreach($tabuada as $multiplicando => $resultado){
        echo "<h2><u>$multiplicando = $resultado</u></h2>";  
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

</body>
</html>