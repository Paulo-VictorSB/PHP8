<?php

    // A função mkdir() -> Make Directory cria uma pasta ou arquivo dentro do local selecionado, caso já exista, vai aparecer um aviso. Para isso, podemos usar a função file_exists()
    //rmdir apaga uma pasta, mas fique atento aos avisos! só remove pasta que não tem conteúdo dentro.
    //Recursive = true or false é o que permite você criar pastas dentro de pastas.

    mkdir(__DIR__ . '/pasta_teste');
    mkdir(__DIR__ . '/lau.txt');

    if(!file_exists(__DIR__ . '/pasta_teste')){
        mkdir(__DIR__ . '/pasta_teste');
    }