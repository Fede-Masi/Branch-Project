<?php
    session_start();
    session_destroy();
    header('Location: Prova.php');
    exit;
?>
