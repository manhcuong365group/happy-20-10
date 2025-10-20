<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Create SQLite database if not exists (for Vercel)
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
}

// Determine if the application is in maintenance mode
if (file_exists($maintenance = __DIR__ . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Bootstrap Laravel and handle the request
(require_once __DIR__ . '/bootstrap/app.php')
    ->handleRequest(Request::capture());
