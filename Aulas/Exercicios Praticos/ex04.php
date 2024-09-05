<?php

    /* 
    Dada a coleção de nomes, devem ser todos apresentados,
    mas a partir de maria (inclusive) devem ser com texto a vermelho
    */

    $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];

    // for($i = 0; $i < 4; $i++){
    //     echo "<p>" . $nomes[$i] . "</p>";
    // };

    // for($i = 4; $i < count($nomes); $i++){
    //     echo "<p class='vermelho'>" . $nomes[$i] . "</p>";
    // };

    $achouMaria = false;
    foreach($nomes as $nome){
        if($nome === 'maria'){
            $achouMaria = true;
        }

        $cor = $achouMaria ? 'vermelho' : '';

        echo "<p class='" . $cor . "'>" . $nome . "</p>";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>
    
    

</body>
</html>