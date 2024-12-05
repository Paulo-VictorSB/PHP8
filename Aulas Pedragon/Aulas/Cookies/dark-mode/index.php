<?php
    $mode = !empty($_COOKIE['mode']) ? $_COOKIE['mode'] : 'lightMode';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste DarkMode com Cookies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?=$mode?>">
    
    <?php require_once('header.php'); ?>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, illo, placeat tempora sapiente harum praesentium deleniti quia officiis ut atque exercitationem pariatur nisi doloremque neque. Ipsam corporis aliquam id dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti, voluptatibus tenetur quae quod deserunt eveniet, expedita quia hic magni dignissimos dolorem! Reiciendis, ad. Obcaecati sequi quisquam provident hic rem.</p>
    <br>

</body>
</html>