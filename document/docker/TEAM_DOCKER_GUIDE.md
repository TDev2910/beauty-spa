# Hướng dẫn Cộng tác Dự án với Docker (SEOulCenter)

Dành cho thành viên team sử dụng hệ điều hành Windows hoặc Linux.

## 📋 Yêu cầu hệ thống

- Đã cài đặt **Docker Desktop** (Windows) hoặc **Docker Engine/Compose** (Linux).
- Đã cài đặt **Git**.

---

## 🚀 Quy trình thiết lập lần đầu (Clone dự án)

Sau khi `git clone` dự án về, thực hiện theo hệ điều hành tương ứng:

### 🪟 Dành cho Windows (PowerShell/CMD)

1.  **Cấu hình .env**:

    ```powershell
    cp .env.example .env
    ```

    _(Mở .env sửa: `DB_HOST=db`, `DB_PORT=3306`, `DB_PASSWORD=root`)_

2.  **Khởi động Docker**:

    ```powershell
    docker-compose up -d --build
    ```

3.  **Cài đặt & Đồng bộ**:
    ```powershell
    docker-compose exec app composer install
    docker-compose exec app php artisan key:generate
    docker-compose exec app php artisan migrate
    ```

---

### 🐧 Dành cho Linux (Ubuntu/Debian/Fedora...)

1.  **Cấp quyền thư mục (Bắt buộc trên Linux)**:

    ```bash
    sudo chmod -R 777 storage bootstrap/cache
    ```

2.  **Cấu hình .env**:

    ```bash
    cp .env.example .env
    ```

    _(Sửa .env: `DB_HOST=db`, `DB_PORT=3306`)_

3.  **Khởi động Docker**:

    ```bash
    sudo docker-compose up -d --build
    ```

4.  **Cài đặt & Đồng bộ**:
    ```bash
    sudo docker-compose exec app composer install
    sudo docker-compose exec app php artisan key:generate
    sudo docker-compose exec app php artisan migrate
    ```

---

## 🔄 Quy trình khi Pull code mới (Hàng ngày)

Khi bạn thực hiện `git pull` bản cập nhật từ đồng nghiệp:

### 🪟 Trên Windows

```powershell
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan migrate
```

### 🐧 Trên Linux

```bash
sudo docker-compose up -d
sudo docker-compose exec app composer install
sudo docker-compose exec app php artisan migrate
```

---

## 🛠 Lệnh Frontend (Chạy tại máy thật)

Cả hai hệ điều hành đều chạy lệnh này ở terminal bên ngoài Docker để có tốc độ tốt nhất:

```bash
npm install
npm run dev
```

---

## 💡 Lưu ý quan trọng

- **Cổng DB**: Kết nối từ tool ngoài (Workbench) dùng cổng **3307**.
- **Địa chỉ Web**: [http://localhost:8000](http://localhost:8000).
- **Lỗi Permission (Linux)**: Nếu không ghi được file, hãy chạy lại lệnh `sudo chmod -R 777 storage bootstrap/cache`.
