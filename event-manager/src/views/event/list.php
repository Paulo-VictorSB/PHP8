<h2>Meus Eventos</h2>

<?php
if (isset($_SESSION['success'])) {
    echo "<p>" . $_SESSION['success'] . "</p>";
    unset($_SESSION['success']);
}

foreach ($events as $event) {
    echo "<div>";
    echo "<h3>" . htmlspecialchars($event['title']) . "</h3>";
    echo "<p>" . htmlspecialchars($event['description']) . "</p>";
    echo "<p>" . htmlspecialchars($event['date']) . "</p>";
    echo "<a href='edit.php?id=" . $event['id'] . "'>Editar</a> | ";
    echo "<a href='delete.php?id=" . $event['id'] . "'>Excluir</a>";
    echo "</div>";
}
?>
