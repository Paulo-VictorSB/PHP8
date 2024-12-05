<?php
if (isset($_SESSION['error'])) {
    echo "<p>" . $_SESSION['error'] . "</p>";
    unset($_SESSION['error']);
}
?>
<form action="" method="POST">
    <label for="title">Título:</label>
    <input type="text" name="title" value="<?= $event['title'] ?>" required>

    <label for="description">Descrição:</label>
    <textarea name="description" required><?= $event['description'] ?></textarea>

    <label for="date">Data:</label>
    <input type="date" name="date" value="<?= $event['date'] ?>" required>

    <button type="submit" name="edit_event">Editar Evento</button>
</form>
