<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Path to the Laravel core
$laravelPath = __DIR__ . '/../laravel-api';

// Maintenance mode check
if (file_exists($laravelPath . '/storage/framework/maintenance.php')) {
    require $laravelPath . '/storage/framework/maintenance.php';
}

// Autoloader
require $laravelPath . '/vendor/autoload.php';

// Bootstrap the application
/** @var Application $app */
$app = require_once $laravelPath . '/bootstrap/app.php';

$app->handleRequest(Request::capture());
