<?php

    // Qaundo falamos do fileSystem estamos falando de manipulação de ficheiros do lado do servidor com o Php, obter informações detalhadas, etc..

    // Constantes mágicas: __DIR__ é a constante que exibe em qual o diretório em que o script está sendo executado.
    // Scandir() é uma função que verifica uma pasta | ele retorna um array listando todos arquivos e pastas contido no local do script, como o Index[0] com o valor de um "."(pasta atual) e o Index[1] com o valor de um ".."(pasta anterior).
    // is_dir() indica se é uma pasta retorna um boolean
    // is_file() indica se é um fiheiro/arquivo

    echo "<pre>";
    
    echo __DIR__ . "<br>";
    $files = scandir(__DIR__);
    print_r($files);
    echo "<hr>";

    $files1 = scandir('./'); // Pasta atual
    print_r($files1);
    print "<hr>";
    $files2 = scandir('../'); // Pasta anterior
    print_r($files2);
    print "<hr>";

    foreach($files as $item){
        echo is_file($item) ? 'Arquivo' : 'Pasta';
        echo "<br>";
    }

    echo "<br>";

    foreach($files as $item){
        if(is_file($item)){
            echo "$item";
            echo "<br>";
        }
    }

?>