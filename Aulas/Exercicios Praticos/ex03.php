<?php 

/* 
    Dada a coleção de nomes, apresenta toda a coleção excepto o nome cujo índice = 4 (maria)
*/

    $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];

    foreach($nomes as $nome){
        if($nome != $nomes[4]){
            echo "$nome<br>";
        }
    }

?>