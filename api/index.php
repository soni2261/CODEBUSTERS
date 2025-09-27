<?php

// Handle Vercel routing
if (!isset($_GET['url'])) {
    $_GET['url'] = $_SERVER['REQUEST_URI'] ?? '';
    $_GET['url'] = ltrim($_GET['url'], '/');
    if (($pos = strpos($_GET['url'], '?')) !== false) {
        $_GET['url'] = substr($_GET['url'], 0, $pos);
    }
}

require_once '../app/init.php';

$app = new App();
?>