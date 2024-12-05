<?php
if (isset($_SESSION['error'])) {
    echo "<p>" . $_SESSION['error'] . "</p>";
    unset($_SESSION['error']);
}
?>
<form action="" method="POST">
    <label for="title">Título:</label>
    <input type="text" name="title" required>

    <label for="description">Descrição:</label>
    <textarea name="description" required></textarea>

    <label for="date">Data:</label>
    <input type="date" name="date" required>

    <button type="submit" name="create_event">Criar Evento</button>
</form>
