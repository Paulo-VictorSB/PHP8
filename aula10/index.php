<?php

$sessoes = [
    'frios' => [
        'carnes' => [
            'hamburguer',
            'patinho',
            'picanha',
            'costela'
        ],
        'bebidas' => [
            'nescau',
            'toddynho',
            'iogurte',
            'chamito'
        ]
    ],
    'limpeza' => [
        'higiene pessoal' => [
            'pasta de dente',
            'escova dental',
            'listerine',
            'sabonete'
        ],
        'casa' => [
            'pinho sol',
            'agua sanitaria',
            'sabão em pó'
        ]
    ]
];

echo '<pre>';
print_r($sessoes);
echo '</pre>';

print_r($sessoes['limpeza']['casa']);