<?php

echo PHP_INT_MIN . '<br>';
echo PHP_INT_MAX . '<br>';

$intNormal = 1; // int
$intHexadecimal = 0xba3; // hexadecimal
$intOctal = 045; // octal
$intBinarie = 0b101; // Binarios

echo $intNormal . '<br>';
echo $intHexadecimal . '<br>';
echo $intOctal . '<br>';
echo $intBinarie . '<br>';

//-----------------------------------------------------------------------

$valorStr = "145";
$valorInt = (int)$valorStr;
//ou
$valorint1 = (integer)$valorStr;

echo $valorInt . '<br>';
echo $valorint1 . '<br>';