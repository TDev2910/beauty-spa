<?php

// 1. Tạo cấu trúc thư mục tạm hoàn chỉnh trong /tmp
$storagePath = '/tmp/storage';
$directories = [
    '/framework/views',
    '/framework/cache',
    '/framework/cache/data',
    '/framework/sessions',
    '/logs',
    '/bootstrap/cache'
];

foreach ($directories as $dir) {
    if (!is_dir($storagePath . $dir)) {
        mkdir($storagePath . $dir, 0755, true);
    }
}

// 2. Ép các biến môi trường quan trọng
putenv("LOG_CHANNEL=stderr"); // Ghi log ra Vercel
putenv("SESSION_DRIVER=cookie"); // Dùng cookie thay vì file session
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");
putenv("APP_CONFIG_CACHE=$storagePath/bootstrap/cache/config.php");
putenv("APP_ROUTES_CACHE=$storagePath/bootstrap/cache/routes.php");

// 3. Khởi chạy Laravel
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 4. QUAN TRỌNG NHẤT: Trói buộc toàn bộ Storage Path của Laravel vào /tmp
$app->useStoragePath($storagePath);

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
