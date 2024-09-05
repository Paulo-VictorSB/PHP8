<?Php

$nomes = ['Paulo', 'Aline', 'Josinalva'];

$resultado = is_array($nomes);

echo $resultado;
echo '<br>';

$resultado = count($nomes);

echo $resultado;

array_push($nomes, 'Alice', 'Adriano');

array_unshift($nomes, 'Marcos');

echo '<pre>';
print_r($nomes);
echo '</pre>';

array_pop($nomes);
array_pop($nomes);
array_pop($nomes);
array_pop($nomes);
array_shift($nomes);

echo '<pre>';
print_r($nomes);
echo '</pre>';