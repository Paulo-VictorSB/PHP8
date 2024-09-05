<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da semana</title>
</head>
<body>
    
    <form action="" method="post">
        <h3>Dias da semana</h3>
        <p>Selecione um número para o dia semana selecionado</p>
        <select name="dia-da-semana" id="" required>
            <option value="domingo">1</option>
            <option value="segunda">2</option>
            <option value="terca">3</option>
            <option value="quarta">4</option>
            <option value="quinta">5</option>
            <option value="sexta">6</option>
            <option value="sabado">7</option>
        </select>
        <input type="submit" value="ver">
    </form>

    <?php 

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dia_da_semana = $_POST['dia-da-semana'];
            $resultado = '';
            switch($dia_da_semana){
                case 'domingo':
                    $resultado = 'Domingo';
                    break;
                case 'segunda':
                    $resultado = 'Segunda-feira';
                    break;
                case 'terca':
                    $resultado = 'Terça-feira';
                    break;
                case 'quarta':
                    $resultado = 'Quarta-feira';
                    break;
                case 'quinta':
                    $resultado = 'Quinta-feira';
                    break;
                case 'sexta':
                    $resultado = 'Sexta-feira';
                    break;
                case 'sabado':
                    $resultado = 'Sábado';
                    break;
            }

            echo "<p>O Dia da semana selecionado foi $resultado</p>";
        }

    ?>

</body>
</html>