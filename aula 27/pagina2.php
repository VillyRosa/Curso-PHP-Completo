<?php

    session_start();

    print_r($_SESSION);

    echo '<br><br>';

    echo $_SESSION['nome'] . $_SESSION['sobrenome'];

?>