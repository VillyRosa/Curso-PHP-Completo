<?php

    if (isset($_GET['nome']) && isset($_GET['idade'])) {
        echo "<h1>O nome é " . $_GET['nome'] . " e tem " . $_GET['idade'] . " anos.</h1>";
    }

?>