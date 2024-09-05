<?php 

$resultado = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = (float) $_POST['n1'];
    $n2 = (float) $_POST['n2'];
    $operacao = $_POST['operacao'];

    $resultado = match($operacao) {
        'adicao' => somar($n1, $n2),
        'subtracao' => subtrair($n1, $n2),
        'multiplicacao' => multiplicar($n1, $n2),
        'divisao' => dividir($n1, $n2),
        default => 'Operação inválida',
    };
}

function somar($a, $b) {
    $value = $a + $b;
    return "A soma dos valores é de $value";
}
function subtrair($a, $b) {
    $value = $a - $b;
    return "A subtração dos valores é de $value";
}
function multiplicar($a, $b) {
    $value = $a * $b;
    return "A multiplicação dos valores é de $value";
}
function dividir($a, $b) {
    if ($b != 0) {
        $value = $a / $b;
        return "A divisão dos valores é de $value";
    } else {
        return "Não é possível dividir por zero!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora simples</title>
</head>
<body>
    
    <form method="post">
        <h2>Calculadora simples</h2>
        <label>Primeiro número: <input type="number" name="n1" id="n1" required></label>
        <label>Segundo número: <input type="number" name="n2" id="n2" required></label>
        <select name="operacao" id="operacao">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

    <?php if($resultado != ''): ?>
        <p><?= $resultado ?></p>
    <?php endif; ?>

</body>
</html>
