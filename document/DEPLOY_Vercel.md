# 🚀 Hướng dẫn Triển khai Laravel 11/12 + Vue (Inertia) lên Vercel

Tài liệu này tóm tắt các thiết lập "vàng" để dự án Laravel của bạn hoạt động mượt mà trên môi trường Serverless của Vercel mà không bị lỗi trắng trang hay lỗi tải file PHP.

---

## 🛠️ 1. Cấu hình Dashboard Vercel (Cực kỳ quan trọng)

Tại mục **Settings -> Build & Development** trên Vercel, bạn hãy cài đặt đúng như sau:

| **Mục**              | **Trạng thái (Override)** | **Giá trị**              |
| :------------------- | :------------------------ | :----------------------- |
| **Framework Preset** | (Mặc định)                | **Other**                |
| **Build Command**    | **BẬT (ON)**              | **(Để trống hoàn toàn)** |
| **Output Directory** | **TẮT (OFF)**             | **(Mặc định)**           |
| **Install Command**  | **BẬT (ON)**              | **npm install**          |
| **Root Directory**   | (Mặc định)                | **./**                   |

> [!IMPORTANT]
> **Lưu ý:** Chúng ta KHÔNG dùng Framework Preset là "Vite". Nếu chọn Vite, Vercel sẽ ép bạn phải có thư mục `dist` và sẽ coi dự án là Web tĩnh, dẫn đến việc không chạy được mã PHP.

---

## 🔑 2. Các Biến Môi Trường (Environment Variables)

Bạn cần thêm các biến sau vào mục **Settings -> Environment Variables** để Laravel có quyền ghi vào bộ nhớ tạm (/tmp):

| **Key**              | **Value**         | **Giải thích**                                  |
| :------------------- | :---------------- | :---------------------------------------------- |
| `APP_KEY`            | `base64:xxx...`   | Lấy từ file `.env` cục bộ của bạn.              |
| `APP_ENV`            | `production`      | Chế độ môi trường sản phẩm.                     |
| `APP_DEBUG`          | `false`           | Nên để false khi chạy ổn định.                  |
| `SESSION_DRIVER`     | `cookie`          | Tránh dùng 'file' vì ổ cứng Vercel bị khóa.     |
| `CACHE_STORE`        | `array`           | Lưu cache vào mảng (RAM) thay vì file.          |
| `LOG_CHANNEL`        | `stderr`          | Đẩy log ra Dashboard Vercel thay vì ghi file.   |
| `VIEW_COMPILED_PATH` | `/tmp`            | Ép Laravel biên dịch giao diện vào thư mục tạm. |
| `APP_CONFIG_CACHE`   | `/tmp/config.php` | Nơi lưu cache cấu hình hệ thống.                |
| `APP_ROUTES_CACHE`   | `/tmp/routes.php` | Nơi lưu cache định tuyến.                       |

---

## 📂 3. Cấu trúc File triển khai

### `vercel.json`

File này giúp Vercel biết cách định tuyến (Routing) và nạp Runtime PHP:

- Sử dụng `vercel-php@0.7.1` để tương thích với Node.js 20/22.
- Định tuyến các asset (`/build/`, `/img/`, `/assets/`) vào thư mục `public`.

### `api/index.php`

Đây là "trái tim" của việc triển khai Serverless:

- **Tự động tạo thư mục**: Mã PHP sẽ tự tạo thư mục `/tmp/storage/...` ngay khi có yêu cầu đầu tiên.
- **Triple-Injection**: Nạp các biến đường dẫn bằng cả `putenv`, `$_ENV` và `$_SERVER` trước khi Laravel khởi động để tránh lỗi `resolve('view')`.

---

## 🏁 4. Quy trình Cập nhật

Mỗi khi bạn sửa code ở máy cục bộ và muốn đưa lên Vercel:

1.  Chạy `npm run build` ở máy của bạn (Để tạo file nén Vue mới nhất).
2.  Chạy các lệnh Git:
    ```bash
    git add .
    git commit -m "Update website"
    git push origin main
    ```
3.  Vercel sẽ tự động nạp code và chạy bản cập nhật.

---

## ❓ 5. Xử lý lỗi thường gặp

- **Lỗi trắng trang (Error 500)**: Kiểm tra tab **Functions** trên Vercel để xem log đỏ. Thường là do thiếu một biến môi trường ở bước 2.
- **Bị tải file index.php khi truy cập**: Kiểm tra lại mục 1 (Framework Preset phải là **Other** và Output Directory phải **TẮT**).
- **Ảnh bị lỗi 404**: Kiểm tra đường dẫn trong `vercel.json` phần `routes`. Đảm bảo các thư mục ảnh được liệt kê đầy đủ.
