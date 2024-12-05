<?php

// Conexão com o banco
$pdo = new PDO('mysql:host=localhost;dbname=your_database', 'root', 'password');

// Consultar dados
$query = $pdo->query('SELECT name, price FROM products');
$products = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?php echo htmlspecialchars($product['name']); ?> - $<?php echo number_format($product['price'], 2); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
