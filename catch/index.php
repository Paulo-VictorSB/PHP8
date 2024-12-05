<?php 

$packageState = 'pedido confirmado';

$frontEnd = match($packageState) {
    'aguardando pagamento' => 'Estamos aguardando seu pagamento.',
    'pagamento cancelado' => 'Pagamento cancelado.',
    'pedido confirmado' => 'Pedido confirmado.',
    default => 'Não encontramos seu pedido/pacote.'
};

echo $frontEnd;

?>
