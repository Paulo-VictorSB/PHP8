<?php
require_once('includes/header.php');
require_once('includes/functions.php');

// Redirecionar se não estiver logado
if (!isLoggedIn()) {
    header("Location: login.php");
    exit();
}
?>

<div class="container py-5 my-5">
    <div class="text-center">
        <h1>Bem-vindo, <?= $_SESSION['user']; ?>!</h1>
        <a href="logout.php" class="btn btn-danger mt-3"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>
