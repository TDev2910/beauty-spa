# Lộ trình Kiểm thử CI/CD (GitHub Actions & Docker)

Tài liệu này hướng dẫn quy trình tiêu chuẩn để kiểm tra tính ổn định của hệ thống CI/CD sau khi đã cấu hình Docker.

## 📌 Tổng quan quy trình
Quy trình CI/CD sẽ tự động kích hoạt khi có một trong các sự kiện sau:
1. Có code được **Push** lên nhánh `main` hoặc `dev`.
2. Có **Pull Request** được tạo trỏ vào nhánh `main` hoặc `dev`.

---

## 🚀 Các bước thực hiện Test chuẩn chỉ

### Bước 1: Tạo nhánh tính năng (Feature Branch)
Luôn bắt đầu bằng việc tạo một nhánh mới để không ảnh hưởng đến code chính:
```powershell
git checkout -b feature/test-cicd
```

### Bước 2: Tạo kịch bản kiểm thử (Test Case)
Tạo hoặc sửa đổi một file Unit Test (ví dụ: `tests/Unit/CICDTest.php`) để "ép" hệ thống phải kiểm tra logic:
```php
public function test_cicd_is_working(): void {
    $this->assertTrue(true);
}
```

### Bước 3: Đưa code lên GitHub
Thực hiện các lệnh commit và push nhánh mới:
```powershell
git add .
git commit -m "Chore: Verify CI/CD Pipeline with Docker build"
git push origin feature/test-cicd
```

### Bước 4: Tạo Pull Request (PR)
1. Truy cập vào Repository trên GitHub.
2. Nhấn **Create Pull Request** từ nhánh vừa push.
3. Quan sát mục **Checks** ở phía dưới trang PR.

---

## 🔍 Giải thích các thành phần kiểm tra

Hệ thống CI của chúng ta sẽ chạy song song 2 nhiệm vụ (Jobs):

### 1. Laravel Tests (`laravel-tests`)
- **Khởi tạo**: Cài đặt PHP 8.2 và bộ thư viện Composer.
- **Môi trường**: Tạo database SQLite tạm thời để chạy test siêu tốc.
- **Frontend**: Chạy `npm install` và `npm run build` để kiểm tra lỗi cú pháp Vue/JS.
- **Kết quả**: Chạy lệnh `php artisan test`. Nếu tất cả Test Case vượt qua -> **Xanh (PASS)**.

### 2. Docker Build Check (`docker-build-check`)
- **Mục tiêu**: Đảm bảo file `Dockerfile` của bạn không có lỗi cú pháp.
- **Hành động**: Thử xây dựng (Build) một Docker Image giả lập giống môi trường thực tế.
- **Kết quả**: Nếu Build thành công -> **Xanh (PASS)**.

---

## ❌ Xử lý khi gặp lỗi (Màu đỏ)

Nếu hệ thống báo lỗi, hãy nhấn vào nút **Details** để xem log:
- **Lỗi 401 Unauthorized**: Lỗi hạ tầng GitHub (Nhấn `Re-run jobs` để chạy lại).
- **Lỗi ở bước build**: Kiểm tra lại cú pháp `Dockerfile` hoặc `package.json`.
- **Lỗi ở bước test**: Code logic của bạn đang có vấn đề, cần sửa lại và push tiếp.

---

## 🏁 Kết luận
Khi cả 2 job đều hiện **Tích xanh (v)**, dự án của bạn đã đạt điều kiện an toàn để Merge. Đây là quy trình bắt buộc trong môi trường DevOps chuyên nghiệp để đảm bảo code luôn chạy tốt trên mọi máy tính.
