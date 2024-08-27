<?php

    # Melhor opção para itreações entre Arrays e Objetos

    #foreach(array) as $value ou $key =>$value {
    #  código
    #}

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
foreach($nomes as $nome){
    echo "$nome<br>";
};

$posicoes = [
    'administrador' => 'joao',
    'analista' => 'ana',
    'opererario' => 'carlos'
]; 

foreach ($posicoes as $chave => $valor) {
    echo "com a posição de $chave, temos a seguinte pessoa $valor<br>";
};

    # no final da execução, a variavael $valor e a $chave vão permanecer disponiveis

echo "<hr>$valor<br>$chave";

?>