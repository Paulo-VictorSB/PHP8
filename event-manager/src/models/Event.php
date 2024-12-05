<?php
// Corrigindo o caminho para o arquivo de conexão
require_once __DIR__ . '/../db/connection.php';

class Event
{
    private $connection;

    public function __construct()
    {
        $this->connection = Database::getConnection();
    }

    public function createEvent($title, $description, $date, $user_id)
    {
        $query = "INSERT INTO events (title, description, date, user_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("sssi", $title, $description, $date, $user_id);
        return $stmt->execute();
    }

    public function getAllEventsByUser($user_id)
    {
        $query = "SELECT * FROM events WHERE user_id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function getEventById($id)
    {
        $query = "SELECT * FROM events WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateEvent($id, $title, $description, $date)
    {
        $query = "UPDATE events SET title = ?, description = ?, date = ? WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("sssi", $title, $description, $date, $id);
        return $stmt->execute();
    }

    public function deleteEvent($id)
    {
        $query = "DELETE FROM events WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
