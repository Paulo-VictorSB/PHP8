<?php
if (isset($_SESSION['error'])) {
    echo "<p>" . $_SESSION['error'] . "</p>";
    unset($_SESSION['error']);
}
?>
<form action="" method="POST">
    <label for="username">Nome de usuário:</label>
    <input type="text" name="username" required>

    <label for="password">Senha:</label>
    <input type="password" name="password" required>

    <button type="submit" name="login">Entrar</button>
</form>
