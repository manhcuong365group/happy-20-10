<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Set environment variables for Vercel
if (!getenv('APP_KEY')) {
    putenv('APP_NAME=Happy 20/10');
    putenv('APP_ENV=production');
    putenv('APP_KEY=base64:da0ijGQL44vms/W7W7IjrFiFUCsXta6jS3AZ8sBhE7Q=');
    putenv('APP_DEBUG=false');
    putenv('APP_URL=https://happy-20-10-seven.vercel.app');
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=/tmp/database.sqlite');
    putenv('SESSION_DRIVER=cookie');
    putenv('CACHE_STORE=array');
    putenv('LOG_CHANNEL=stderr');
}

// Create SQLite database if not exists (for Vercel)
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
}

// Register the Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Bootstrap Laravel and handle the request
(require_once __DIR__ . '/bootstrap/app.php')
    ->handleRequest(Request::capture());
