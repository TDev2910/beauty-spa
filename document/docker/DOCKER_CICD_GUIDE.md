# Hướng dẫn Triển khai Docker & CI/CD (SEOulCenter)

Tài liệu này lưu trữ lộ trình và các ghi chú quan trọng trong quá trình chuyển đổi từ Laragon sang Docker và thiết lập CI/CD.

## 1. Lộ trình phát triển (Roadmap)

### Giai đoạn 1: Docker cho phát triển Local
- **Mục tiêu**: Thay thế Laragon/XAMPP bằng Docker để mọi thành viên có môi trường giống hệt nhau.
- **Công cụ**: Docker Desktop, Docker Compose.
- **Tệp tin chính**: `Dockerfile`, `docker-compose.yml`.

### Giai đoạn 2: GitHub CI (Continuous Integration)
- **Mục tiêu**: Tự động chạy Unit Test và kiểm tra lỗi cú pháp mỗi khi push code lên GitHub.
- **Công cụ**: GitHub Actions.
- **Tệp tin chính**: `.github/workflows/laravel.yml`.

### Giai đoạn 3: Triển khai lên Vercel (Deployment)
- **Mục tiêu**: Đưa website lên môi trường internet một cách nhanh chóng và tự động.
- **Lưu ý**: Vercel sử dụng Serverless PHP, không chạy trực tiếp Docker container.
- **Tệp tin chính**: `vercel.json`, `api/index.php`.

---

## 2. Ghi chú Quan trọng

- **Cấu hình Database**: Khi chạy Docker, `DB_HOST` trong file `.env` phải được đổi từ `127.0.0.1` thành tên service trong docker-compose (thường là `db`).
- **Phân quyền Storage**: Luôn đảm bảo thư mục `storage` và `bootstrap/cache` có quyền ghi cho user `www-data` trong container.
- **Vercel vs Docker**: Sử dụng Docker để phát triển, nhưng Vercel để chạy thực tế (Production).

---

## 3. Các lệnh thường dùng

- **Bật môi trường**: `docker-compose up -d`
- **Tắt môi trường**: `docker-compose down`
- **Chạy lệnh bên trong container**: `docker-compose exec app php artisan migrate`
- **Xem Log**: `docker-compose logs -f app`
