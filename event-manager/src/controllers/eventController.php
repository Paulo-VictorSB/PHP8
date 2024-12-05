<?php
// Remova esta linha se já estiver chamada no index.php ou em outro lugar
// session_start(); 

// Caminho absoluto para os arquivos necessários
require_once __DIR__ . '/../models/Event.php';
require_once __DIR__ . '/../models/User.php';

class EventController
{
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_event'])) {
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $date = trim($_POST['date']);

            $eventModel = new Event();
            if ($eventModel->createEvent($title, $description, $date, $_SESSION['user_id'])) {
                $_SESSION['success'] = 'Evento criado com sucesso!';
                header('Location: ../../index.php');
                exit;
            } else {
                $_SESSION['error'] = 'Erro ao criar evento!';
            }
        }

        include '../views/event/create.php';
    }

    public function edit($id)
    {
        $eventModel = new Event();
        $event = $eventModel->getEventById($id);

        if (!$event || $event['user_id'] != $_SESSION['user_id']) {
            header('Location: ../../index.php');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_event'])) {
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $date = trim($_POST['date']);

            $eventModel->updateEvent($id, $title, $description, $date);
            $_SESSION['success'] = 'Evento atualizado com sucesso!';
            header('Location: ../../src/views/event/list.php');
            exit;
        }

        include '../views/event/edit.php';
    }

    public function list()
    {
        $eventModel = new Event();
        $events = $eventModel->getAllEventsByUser($_SESSION['user_id']);
        include '../views/event/list.php';
    }

    public function delete($id)
    {
        $eventModel = new Event();
        $eventModel->deleteEvent($id);
        $_SESSION['success'] = 'Evento excluído com sucesso!';
        header('Location: ../../src/views/event/list.php');
        exit;
    }
}
