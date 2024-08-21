<?php
function classificarCor($corHex) {
    // Remove o hash (#) se presente
    $corHex = ltrim($corHex, '#');
    
    // Converte o hexadecimal para RGB
    $r = hexdec(substr($corHex, 0, 2));
    $g = hexdec(substr($corHex, 2, 2));
    $b = hexdec(substr($corHex, 4, 2));
    
    // Determina se a cor é quente ou fria
    return ($r > $b && $r > $g) ? 'Quente' : 'Fria';
}

$mensagem = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $corHex = htmlspecialchars($_POST['cor']);
    if (preg_match('/^#[0-9A-Fa-f]{6}$/', $corHex)) {
        $mensagem = classificarCor($corHex);
    } else {
        $mensagem = 'Cor inválida. Use o formato hexadecimal, ex: #FF5733.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificar Cor</title>
    <style>
        .resultado {
            padding: 10px;
            color: white;
            font-weight: bold;
            margin-top: 20px;
        }
        .quente {
            background-color: red;
        }
        .fria {
            background-color: blue;
        }
    </style>
</head>
<body>
    <h1>Classificador de Cores</h1>
    <form method="post">
        <label for="cor">Insira a cor (formato hexadecimal, ex: #FF5733):</label>
        <input type="text" id="cor" name="cor" placeholder="#FF5733" required>
        <button type="submit">Classificar</button>
    </form>
    
    <?php if ($mensagem): ?>
        <div class="resultado <?= strtolower($mensagem); ?>">
            A cor inserida é: <?= $mensagem; ?>
        </div>
    <?php endif; ?>
</body>
</html>
