<?php
require 'tasks.php'; // Inclui a lógica de tarefas
include 'header.php'; // Inclui o cabeçalho

// Lista as tarefas
$allTasks = listTasks();
?>

<h2>Adicionar Tarefa</h2>
<form action="" method="POST">
    <input type="text" name="task" placeholder="Digite sua tarefa aqui..." required>
    <input type="submit" value="Adicionar">
</form>

<h2>Lista de Tarefas:</h2>
<ul>
    <?php if (empty($allTasks)): ?>
        <li>Nenhuma tarefa encontrada.</li>
    <?php else: ?>
        <?php foreach ($allTasks as $index => $task): ?>
            <li>
                <?php echo htmlspecialchars($task); ?>
                <a href="?remove=<?php echo $index; ?>">[Remover]</a>
            </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>

<?php include 'footer.php'; // Inclui o rodapé ?>
