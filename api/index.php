<?php

/**
 * Vercel Serverless Entry Point for Laravel 11/12
 *
 * Vercel's filesystem is read-only except for /tmp.
 * We must create all necessary directories and set paths BEFORE
 * bootstrapping Laravel, so ViewServiceProvider registers the correct paths.
 */

// ============================================================
// STEP 1: Create all necessary writable directories in /tmp
// ============================================================
$storagePath = '/tmp/storage';

$dirs = [
    '/framework/views',
    '/framework/cache',
    '/framework/cache/data',
    '/framework/sessions',
    '/logs',
    '/app',
    '/app/public',
];

foreach ($dirs as $dir) {
    $fullPath = $storagePath . $dir;
    if (!is_dir($fullPath)) {
        mkdir($fullPath, 0755, true);
    }
}

// ============================================================
// STEP 2: Set ALL environment variables BEFORE laravel boots.
// Using both putenv() AND $_ENV/$_SERVER for maximum compatibility.
// ============================================================
$envVars = [
    'APP_STORAGE_PATH'  => $storagePath,
    'VIEW_COMPILED_PATH' => $storagePath . '/framework/views',
    'APP_CONFIG_CACHE'  => $storagePath . '/framework/cache/config.php',
    'APP_ROUTES_CACHE'  => $storagePath . '/framework/cache/routes.php',
    'APP_SERVICES_CACHE'=> $storagePath . '/framework/cache/services.php',
    'APP_PACKAGES_CACHE'=> $storagePath . '/framework/cache/packages.php',
    'CACHE_STORE'       => 'array',
    'CACHE_DRIVER'      => 'array',
    'SESSION_DRIVER'    => 'cookie',
    'LOG_CHANNEL'       => 'stderr',
];

foreach ($envVars as $key => $value) {
    putenv("$key=$value");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

// ============================================================
// STEP 3: Bootstrap and run Laravel 11/12
// ============================================================
define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Override storage path after app creation (belt-and-suspenders approach)
$app->useStoragePath($storagePath);

$app->handleRequest(\Illuminate\Http\Request::capture());
