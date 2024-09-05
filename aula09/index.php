<?php

$nome1 = "João";
$nome2 = "Ana";
$nome3 = "Carlos";

$nomes = array("João", "Ana", "Carlos");
#ou
$nomes = [
    "João",
    "Ana",
    "Carlos"
];

echo $nomes[0] . " " . $nomes[2];
echo "<br>";

$dadosPessoais = [
    100 => "Paulo Victor",
    101 => 19,
    102 => "Curado"
];

$dadosPessoais[] = "Estudando PhP";

echo "Meu nome é " . $dadosPessoais[100] . " eu tenho " . $dadosPessoais[101] . " anos e resido no " . $dadosPessoais[102] . " e atualmente " . $dadosPessoais[103];

unset($dadosPessoais[101]);
unset($dadosPessoais[102]);
unset($dadosPessoais[103]);

echo '<pre>';
print_r($dadosPessoais);
echo '</pre>';

$empresa = [
    'ceo' => "João",
    'adm' => "Ana",
    'exec' => "Carlos",
    'contabil' => "Cristina"
];

$empresa['Operario'] = 'Você';

echo '<pre>';
print_r ($empresa);
echo '</pre>';