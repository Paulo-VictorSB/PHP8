<?php

function somar($a, $b){
    return $a + $b;
};

function subtrair($a, $b){
    return $a - $b;
};

function multiplicar($a, $b){
    return $a * $b;
};

function dividir($a, $b){
    if($a > 0){
        return $a / $b;
    } else {
        return "Erro: o primeiro número não pode ser menor que 0";
    };
};
