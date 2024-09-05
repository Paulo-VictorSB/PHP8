<?php
declare(strict_types=1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $datanasc = $_POST['datanasc'] ?? 'Não informado';
    $telefone = $_POST['telefone'] ?? 'Não informado';
    $endereco = $_POST['endereco'] ?? 'Não informado';

    echo registrarFuncionario($nome, $email, $datanasc, $telefone, $endereco);
}

function errorMsg(): string {
    return "<p class='error'>ERROR: Nome ou Email não inclusos!</p>";
}

function successMsg(): string {
    return "<p class='success'>Usuário registrado com sucesso!</p>";
}

function registrarFuncionario(string $nome, string $email, string $datanasc, string $telefone, string $endereco): string {
    if (empty($nome) || empty($email)) {
        return errorMsg();
    } else {
        return successMsg() . "<p>Nome: $nome</p><p>Email: $email</p><p>Data de Nascimento: $datanasc</p><p>Telefone: $telefone</p><p>Endereço: $endereco</p>";
    }
}
?>

<style>
.error {
    color: white;
    background-color: red;
}

.success {
    color: white;
    background-color: green;
}
</style>
