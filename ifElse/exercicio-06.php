<?php 
    // Simular mensagem de erro
    // Se a variavel erro tiver conteudo dentro dela, deverá ser
    // aparesentada uma mensagem de erro
    // caso contrario, se a mensagem de erro estiver vazia, deverá aparecer uma mensagem de sucesso

    $mensagem_de_erro = 'ERRO';

    $css = '';
    $mensagem = null;
    if(!empty($mensagem_de_erro)){
        $css = 'error-msg';
        $mensagem = $mensagem_de_erro;
    } else {
        $css = 'success-msg';
        $mensagem = 'SUCESSO';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @keyframes in {
            0% {
                opacity: 0;
            }
        }

        .error-msg {
            background-color: darkred;
            color: white;
            padding: 10px;
            animation: in .5s; 
        }
        .success-msg {
            background-color: darkgreen;
            color: white;
            padding: 10px;
            animation: in .5s; 
        }
    </style>
    <title>Exercicio 6</title>
</head>
<body>
    
    <div class="<?= $css ?>"><?= $mensagem ?></div>

</body>
</html>