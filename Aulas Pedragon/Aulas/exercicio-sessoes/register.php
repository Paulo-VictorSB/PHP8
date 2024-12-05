<?php
require_once('includes/header.php');
require_once('includes/functions.php');

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $message = createNewUser($user, $password);
    if($message == "Usuário registrado com sucesso!"){
        header('location: login.php');
    }
}
?>

<div class="container py-5 my-5">
    <form method="post" action="register.php" class="row justify-content-center">
        <div class="col-4">
            <h2 class="text-center">Registrar</h2>
            <?php if ($message): ?>
                <div class="alert alert-info"><?= $message ?></div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="userId" class="form-label">Usuário</label>
                <input type="text" name="user" class="form-control" id="userId" required>
            </div>
            <div class="mb-3">
                <label for="passwordId" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control" id="passwordId" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Registrar</button>
            </div>
        </div>
    </form>
</div>

<?php include_once('includes/footer.php'); ?>
