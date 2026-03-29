<?php

    require_once(__DIR__ . '/config.php');
    require_once(__DIR__ . '/helpers.php');

    $uri = $_SERVER['REQUEST_URI'];

    echo"DEBUG: bootstrap.php";

?>

<?php include __DIR__ . '/views/layout.php'; ?>