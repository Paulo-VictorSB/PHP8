<?php

// O que são e como usar cookies?

/*
    Cookies é um mecanismo para guardar dados do lado do cliente (browser). Podem ser usados para várias finalidades. Sessões de utilizador é a finalidade mais recorrente. Mas podemos guardar todos os tipos de informação.

    IMPORTANTE: NUNCA devemos guardar cookies para conteúdo sensível, uma vez que a leitura dos dados guardados por ser feita com facilidade. Nunca devemos esperar que o cookie exista do lado do cliente, porque o mesmo pode remover os cookies ou alterar os seus valores esperando.

    Podemos criar mais do que um cookie de cada site.
*/

$valor = '[não existe cookie]';
if(!empty($_COOKIE['meu_cookie'])){
    $valor = $_COOKIE['meu_cookie'];
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
    <?php require_once('nav.php');?>

    <h1>Inicio</h1>
    <hr>
    <p>Valor do cookie <?= $valor?></p>

</body>
</html>