<?php

    $contador = 1;

    do {
        echo "<div class='box'>" . "<p>" . $contador . "</p>". "</div>";
        $contador++;
    } while ($contador <= 5);

?>

<style>
    body {
        background-color: lightblue;
        height: 100vh;
        display: flex;
        flex-flow: row nowrap;
        gap: 10px;
    }

    .box {
        font-size: 2em;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: red;
        color: white;
        pad: 50px;
        width: 60%;
    }
</style>