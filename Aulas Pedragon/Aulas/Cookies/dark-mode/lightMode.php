<?php
setcookie('mode', 'lightMode', time() + 3600);
header('Location: index.php');
