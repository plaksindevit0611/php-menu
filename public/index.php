<?php

use Seytar\Routing\Router;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Autoloader
require_once '../vendor/autoload.php';

Router::bootstrap(function ($ex) {
    header('Content-Type: text/html; charset=utf-8');
    echo '404 - Page Not Found';
});

// Load Config
require_once '../config/config.php';

// Routes
require_once '../routes/web.php';
