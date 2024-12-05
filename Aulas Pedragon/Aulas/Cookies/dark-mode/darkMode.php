<?php
setcookie('mode', 'darkMode', time() + 3600);
header('Location: index.php');
