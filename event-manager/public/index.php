<?php
// Incluir a configuração
require_once '../config/config.php';

// Buscar eventos do banco de dados
$query = $pdo->query("SELECT * FROM events ORDER BY event_date ASC");
$events = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Gerenciador de Eventos</h1>
    </header>

    <div class="main-content container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4">Lista de Eventos</h2>
            <a href="create.php" class="btn btn-custom">Criar Novo Evento</a>
        </div>

        <?php if (count($events) > 0): ?>
            <div class="row">
                <?php foreach ($events as $event): ?>
                    <div class="col-md-4">
                        <div class="event-card">
                            <h5><?php echo htmlspecialchars($event['title']); ?></h5>
                            <p><?php echo htmlspecialchars($event['description']); ?></p>
                            <p><strong>Data:</strong> <?php echo date('d/m/Y H:i', strtotime($event['event_date'])); ?></p>
                            <div class="d-flex justify-content-between">
                                <a href="edit.php?id=<?php echo $event['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
                                <a href="delete.php?id=<?php echo $event['id']; ?>" class="btn btn-sm btn-danger btn-delete">Excluir</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-info">Nenhum evento encontrado. Clique em "Criar Novo Evento" para adicionar um evento.</div>
        <?php endif; ?>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Gerenciador de Eventos</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
