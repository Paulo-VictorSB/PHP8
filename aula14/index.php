<?php

var_dump(10 == 20);
var_dump(5 == 5);
var_dump('Joao' == 'joao');
var_dump('joao ribeiro' == 'joao' . ' '. 'ribeiro');

var_dump(10 <=> 5);
var_dump(10 <=> 10);
var_dump(5 <=> 10);

$valor = 'joao';
echo $valor == 'joao' ? 'sim' : 'nao';

$abece = null;
$a = $abece ?? 'cu';
echo $a;