<?php

    session_start();

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'crud'
    );

    /* if (isset($conn)) {
        echo 'La base de datos se ha conectado';
    } */
?>