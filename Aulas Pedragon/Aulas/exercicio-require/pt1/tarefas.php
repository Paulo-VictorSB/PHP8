<?php
// gerenciar tarefas

$tarefas = [];

function adicionarTarefa($tarefa){
    global $tarefas;
    $tarefas[] = $tarefa;
}

function listarTarefas() {
    global $tarefas;
    return $tarefas;
}

adicionarTarefa("Vou dominar o mundo!");
adicionarTarefa("Esse vai ser o grande plano!");