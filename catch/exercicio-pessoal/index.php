<?php 
    $resultado = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
    
        $calcular = ($n1 + $n2 + $n3 + $n4) / 4;
    
        $resultado = match (true) {
            $calcular <= 3 => 'Que pena.. Você obteve um resultado Péssimo.',
            $calcular <= 5 => 'Precisa estudar mais.. resultado Ruim.',
            $calcular >= 6 && $calcular < 10 => 'Você obteve um bom resultado.',
            $calcular == 10 => 'Parabéns, seu resultado foi excelente!'
        };
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontuação escolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Pontuação escolar</h1>
    <div class="quadro-container">
        <img src="quadro.png" style="width: 100%; height: 100%;">
        <form method="post">
            <div class="container">
                <div class="row-nota">
                    <label>Primeira nota: <input type="number" name="n1" id="n1" required></label>
                    <label>Segunda nota: <input type="number" name="n2" id="n2" required></label>
                    <label>Terceira nota: <input type="number" name="n3" id="n3" required></label>
                    <label>Quarta nota: <input type="number" name="n4" id="n4" required></label>
                </div>
                <input type="submit" value="Calcular média" id="calc">
            </div>
        </form>
    </div>

    <?php if($resultado != '') :?>
        <div class="resultado">
            <h2>Sua média é de: <?= $calcular ?></h2>
            <h2><?= $resultado ?></h2>
        </div>
    <?php endif; ?>

</body>
</html>