# Hướng dẫn Cộng tác Dự án với Docker (SEOulCenter)

Tài liệu này hướng dẫn cách thiết lập môi trường phát triển nhanh chóng cho thành viên mới hoặc khi bạn pull code mới về từ GitHub.

## 📋 Yêu cầu hệ thống
- Đã cài đặt [Docker Desktop](https://www.docker.com/products/docker-desktop/).
- Đã cài đặt [Git](https://git-scm.com/).
- (Tùy chọn) Node.js (nếu muốn chạy `npm run dev` ở máy thật).

---

## 🚀 Quy trình thiết lập lần đầu (Setup)

Nếu bạn vừa mới clone dự án về, thực hiện các bước sau:

### 1. Cấu hình Environment
Copy file mẫu và tạo file cấu hình riêng:
```powershell
cp .env.example .env
```
Mở file `.env` và đảm bảo các dòng sau khớp với Docker:
```dotenv
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=seoulcenter
DB_USERNAME=root
DB_PASSWORD=root
```

### 2. Khởi động Docker
Mở Terminal tại thư mục dự án và chạy:
```powershell
docker-compose up -d --build
```

### 3. Cài đặt thư viện & Dữ liệu
Chạy các lệnh này (bên trong Docker) để đồng bộ:
```powershell
# Cài đặt thư viện PHP
docker-compose exec app composer install

# Tạo Key ứng dụng
docker-compose exec app php artisan key:generate

# Tạo bảng dữ liệu
docker-compose exec app php artisan migrate

# (Nếu có) Chèn dữ liệu mẫu
docker-compose exec app php artisan db:seed
```

---

## 🔄 Quy trình làm việc hàng ngày (Workflow)

Mỗi khi bạn `git pull` code mới từ đồng nghiệp về, hãy thực hiện:

1. **Khởi động môi trường (nếu chưa bật):**
   ```powershell
   docker-compose up -d
   ```

2. **Cập nhật thư viện & Database (Nếu repo có thay đổi composer.json hoặc migrations):**
   ```powershell
   docker-compose exec app composer install
   docker-compose exec app php artisan migrate
   ```

3. **Chạy Frontend (Vite):**
   Mở một terminal riêng và chạy:
   ```powershell
   npm install
   npm run dev
   ```

---

## 🛠 Các lệnh hữu ích thường dùng

| Lệnh | Chức năng |
| :--- | :--- |
| `docker-compose up -d` | Bật môi trường (chạy ngầm) |
| `docker-compose down` | Tắt môi trường |
| `docker-compose logs -f app` | Xem log của ứng dụng Laravel |
| `docker-compose exec app php artisan ...` | Chạy lệnh Artisan bất kỳ bên trong Docker |
| `docker-compose restart app` | Khởi động lại Server app (khi sửa cấu hình hệ thống) |

---

## 💡 Lưu ý quan trọng
- **Database:** Khi dùng Docker, bạn truy cập DB qua cổng **3307** nếu dùng tool ngoài (HeidiSQL, Workbench) và cổng **3306** nếu cấu hình trong code Laravel.
- **Port:** Web của bạn sẽ chạy tại địa chỉ: [http://localhost:8000](http://localhost:8000).
- **Quyền ghi file:** Nếu gặp lỗi về `storage` hoặc `cache`, hãy chạy:
  `docker-compose exec app chmod -R 777 storage bootstrap/cache`
