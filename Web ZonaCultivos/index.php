<?php
    $route = isset($_GET['route']) ? $_GET['route'] : '/';

    switch ($route) {
        case '/':
            include 'templates/page.php';
            break;
        default:
            include 'templates/404.php';
            break;
    }
?>

