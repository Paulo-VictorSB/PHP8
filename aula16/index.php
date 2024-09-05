<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora simples</title>
    <style>
        form {
            display: flex;
            flex-flow: column nowrap;
            gap: 10px;
            max-width: 300px;
        }
    </style>
</head>
<body>
    
    <form method="post">
        <h3>Calculadora simples</h3>
        <label>Primeiro Número: <input type="number" name="num1" id="" required></label>
        <label>Segundo Número: <input type="number" name="num2" id="" required></label>
        <select name="operacao" id="">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
        </select>
        <input type="submit" value="Somar">
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
        $resultado = 0;

        switch($operacao) {
            case 'somar':
                $resultado = $num1 + $num2;
                break;
            case 'subtrair':
                $resultado = $num1 - $num2;
                break;
            default:
                $resultado = 'Impossivel realizar alguma operação com esses números.';
        }

        echo "<h2>O Resultado é: $resultado</h2>";
    }

    ?>

</body>
</html>