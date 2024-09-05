<?php
$senhaCorreta = "1234";
$senhaDigitada = "";

// Verifica se a senha foi enviada pelo formulário
if (isset($_POST['senha'])) {
    $senhaDigitada = $_POST['senha'];

    // Verifica se a senha está correta
    if ($senhaDigitada === $senhaCorreta) {
        $mensagem = "<p style='color: green;'>Senha correta! Acesso permitido.</p>";
    } else {
        $mensagem = "<p style='color: red;'>Senha incorreta. Tente novamente.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar senha</title>
</head>
<body>

    <?php
    // Exibe a mensagem, se houver
    if (isset($mensagem)) {
        echo $mensagem;
    }
    
    // Exibe o formulário apenas se a senha estiver incorreta
    if (!isset($senhaDigitada) || $senhaDigitada !== $senhaCorreta) {
    ?>
        <form method="POST">
            <label for="senha">Digite a senha:</label>
            <input type="password" id="senha" name="senha">
            <input type="submit" value="Enviar">
        </form>
    <?php
    }
    ?>

</body>
</html>
