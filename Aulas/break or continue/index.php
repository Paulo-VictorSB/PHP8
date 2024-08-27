<?php 

    # Break X Continue

    /*
    
    Os Loops (ciclos) são usados para executar o mesmo código multiplas vezes. Em determinadas situações, podemos querer que o ciclo não execute todas as suas iterações, ou queremos que seja simplismente interrompido

    É nesses cenários que entram o break e o continue

    */



# ------------------------BREAK-----------------------
# Permite interromper a execucao de um ciclo antes do previsto.

$paragem = 5;
for($i = 0; $i <= 10; $i++){
    echo "$i<br>";
    if($i == $paragem) break;
    # ou
    if($i == $paragem) {
        break;
    };
}

echo '<br>';

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
$nome_que_vai_interromper = 'francisco';
foreach($nomes as $nome){
    echo "$nome<br>";
    if($nome == $nome_que_vai_interromper) break;
}

# Tanto os ciclos break ou contine funcionam nos ciclos while e do while.

#-----------------------CONTINUE----------------------
# Permite passar de imediato para a iteração seguinte

echo '<br><br>';

$ignorar = 'carlos';

foreach($nomes as $nome){
    if($nome == $ignorar) continue;
    echo "$nome<br>";
};

#-----------------------------------------------------

$paises= [
    'Brasil' => ['Pernambuco', 'Rio de Janeiro', 'Bahia'],
    'Estados Unidos' => ['New York', 'Cansas', 'Las Vegas'],
    'Portugal' => ['Lisboa', 'Porto']
];

foreach($paises as $país => $estados){
    echo "<h3><u>$país</u><h3>";

    foreach($estados as $estado){
        if($estado == 'Cansas') break 2;
        echo "<p>$estado</p>";
    };

};

echo "FIM";

?>