<?php

// 1. Ép Laravel sử dụng thư mục /tmp (thư mục duy nhất có quyền ghi trên Vercel)
$storagePath = '/tmp/storage/framework';
$directories = ['/views', '/sessions', '/cache'];

foreach ($directories as $dir) {
    if (!is_dir($storagePath . $dir)) {
        mkdir($storagePath . $dir, 0755, true);
    }
}

// 2. Cấu hình biến môi trường ngay trong runtime để Laravel nhận diện
putenv("VIEW_COMPILED_PATH=$storagePath/views");
putenv("SESSION_DRIVER=cookie"); // Tránh dùng 'file' session vì sẽ mất khi reset
putenv("LOG_CHANNEL=stderr");    // Đẩy log ra Vercel Dashboard thay vì ghi vào file

// 3. Khởi chạy Laravel chuẩn
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
