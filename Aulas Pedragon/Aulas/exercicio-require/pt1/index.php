<?php 

require('tarefas.php');
include('header.php');

$todasTarefas = listarTarefas();

?>

    <ul>
        <?php foreach($todasTarefas as $tarefa): ?>
            <li><?php echo $tarefa; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

