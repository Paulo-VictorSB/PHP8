<?php
require_once '../config/config.php';
session_start();

// Função para exibir notificações
function getNotifications() {
    // Verificar se existe alguma notificação na sessão
    if (isset($_SESSION['notifications']) && !empty($_SESSION['notifications'])) {
        $notifications = $_SESSION['notifications'];
        $_SESSION['notifications'] = []; // Limpar as notificações após exibição
        return $notifications;
    }
    return [];
}

// Função para adicionar notificação
function addNotification($message, $type = 'success') {
    $_SESSION['notifications'][] = ['message' => $message, 'type' => $type];
}

// Exemplo de como adicionar uma notificação de sucesso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_notification'])) {
    $message = trim($_POST['message']);
    $type = $_POST['type']; // Pode ser 'success', 'error', etc.

    if ($message) {
        addNotification($message, $type);
    }

    header('Location: ../index.php');
    exit;
}
