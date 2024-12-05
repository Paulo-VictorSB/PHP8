<?php
session_start();

// Inicializa a lista de tarefas se não existir
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Adiciona uma tarefa
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
    $_SESSION['tasks'][] = $_POST['task'];
}

// Remove uma tarefa
if (isset($_GET['remove'])) {
    $index = (int)$_GET['remove'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Reindexa o array
    }
}

// Função para listar tarefas
function listTasks() {
    return $_SESSION['tasks'];
}
