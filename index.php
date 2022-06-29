<!-- # index.php -->

<?php
require_once('connection.php');

if (isset($_GET['Controller'])) {
    $controller = $_GET['Controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
    } else {
    $controller = 'pages';
    $action = 'home';
}
require_once('routes.php');
