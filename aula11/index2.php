<?php

$cliente = [
    'nome' => 'Paulo',
    'apelido' => 'Victor',
    'idade' => '19',
    'email' => 'paulovdbarbosa@gmail.com'
];

echo var_dump(key_exists('email', $cliente));

echo implode(' ', $cliente);