<template>
    <footer class="footer-wrapper">
        <div class="container">
            <div class="footer-grid">
                <!-- Cột 1: Thông tin công ty & Logo -->
                <div class="ladi-image">
                    <img src="https://w.ladicdn.com/s500x400/5977f59d1abc544991d43c5b/seoul_spa_logo_8_3-1-04-min-20250219021940-lqcdy.png"
                        alt="Seoul Center Logo" class="footer-logo">
                    <div class="content">
                        <p>Phòng khám chuyên khoa da liễu Seoul Center là địa chỉ tin cậy,
                            đem đến nhiều dịch vụ chất lượng. Nổi bật là những dịch vụ spa, công nghệ độc quyền,
                            chăm sóc da, phun xăm. Tự hào sở hữu đội ngũ bác sĩ chuyên môn cao, tiên phong công nghệ
                            tiên tiến để đem đến giải pháp làm đẹp tối ưu.
                        </p>
                        <p>Tất cả phương pháp đều được chuyển giao từ những nước phát triển, đảm bảo tiêu chuẩn an toàn,
                            chất lượng, áp dụng thành công cho hàng triệu khách hàng. </p>
                    </div>
                    <div class="contact-info">
                        <h1>THÔNG TIN LIÊN HỆ</h1>
                        <div class="contact-item">
                            <i class="pi pi-phone"></i>
                            <p>(+84) 914 269 346</p>
                        </div>
                        <div class="contact-item">
                            <i class="pi pi-map-marker"></i>
                            <p>375 Nguyễn Thượng Hiền, Phường 11, Quận 10, TP. Hồ Chí Minh</p>
                        </div>
                        <div class="contact-item">
                            <i class="pi pi-envelope"></i>
                            <p>cskh@seoulcenter.vn</p>
                        </div>
                        <div class="contact-item">
                            <i class="pi pi-clock"></i>
                            <div class="working-time">
                                <p><strong>Thời gian làm việc:</strong></p>
                                <p>Từ 08:45 đến 19:30 hàng ngày</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cột 2: Chi nhánh -->
                <div class="footer-col">
                    <div class="branch-section">
                        <div class="branch-header-box">
                            PHÒNG KHÁM CHUYÊN KHOA DA LIỄU SEOUL CENTER
                        </div>
                        <div class="branch-container">
                            <p class="branch-sub"><i>( Đối với các dịch vụ công nghệ độc quyền, chăm sóc da, phun
                                    xăm)</i></p>
                            <div class="branch-list">
                                <div class="branch-item">
                                    <p class="branch-name">Phòng Khám Chuyên Khoa Da Liễu Tân Bình</p>
                                    <p>120 Ni Sư Huỳnh Liên, Phường 10, Quận Tân Bình, TP. Hồ Chí Minh</p>
                                    <p>GPHĐ Số: 07739/HCM - GPHD</p>
                                </div>
                                <div class="branch-item">
                                    <p class="branch-name">Phòng Khám Chuyên Khoa Da Liễu Huế</p>
                                    <p>34 Nguyễn Huệ, P. Vĩnh Ninh, TP. Huế</p>
                                    <p>GPHĐ Số: 028/TTH-GPHĐ</p>
                                </div>
                                <div class="branch-item">
                                    <p class="branch-name">Phòng Khám Chuyên Khoa Da Liễu Cần Thơ</p>
                                    <p>Số 2 Trần Hưng Đạo, TP. Cần Thơ</p>
                                    <p>GPHĐ Số: 123/CT-GPHĐ</p>
                                </div>
                                <div class="branch-item">
                                    <p class="branch-name">Phòng Khám Chuyên Khoa Da Liễu Tân Bình</p>
                                    <p>120 Ni Sư Huỳnh Liên, Phường Bảy Hiền, TP. Hồ Chí Minh</p>
                                    <p>GPHĐ Số: 07739/HCM - GPHD</p>
                                </div>
                            </div>
                        </div>
                        <div class="view-more-link">
                            <a href="#">Xem Thêm Chi Nhánh Gần Nhất >></a>
                        </div>
                        <!-- form 2  -->
                        <div class="footer-col">
                            <div class="registration-form-box">
                                <h2 class="reg-title">ĐĂNG KÝ NHẬN ƯU ĐÃI</h2>
                                <p class="reg-sub"><i>*Chỉ áp dụng cho 30 khách hàng đăng ký đầu tiên*</i></p>
                                <form @submit.prevent>
                                    <div class="form-row">
                                        <input type="text" placeholder="Họ và Tên">
                                        <input type="tel" placeholder="Số điện thoại">
                                    </div>
                                    <textarea placeholder="Để lại lời nhắn cho chúng tôi"></textarea>
                                    <div class="form-button">
                                        <button type="submit">GỬI THÔNG TIN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
.ladi-image {
    width: 100%;
    height: 100%;
}

.content {
    margin-top: 20px;
    font-size: 16px;
    font-weight: 550;
    line-height: 1.6;
}

.contact-info {
    margin-top: 30px;
}

.contact-info h1 {
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 15px;
    border-bottom: 2px solid #fff;
    display: inline-block;
    padding-bottom: 5px;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.contact-item i {
    font-size: 22px;
}

.contact-item p {
    margin: 0;
    font-size: 16px;
    font-weight: 550;
}

.working-time p {
    margin: 0;
}

/* Branch Box */
.branch-section {
    display: flex;
    flex-direction: column;
    max-width: 750px;
    /* Thêm dòng này, bạn tùy chỉnh số 450 này nhỏ lại nếu muốn */
    margin: 0 auto;
    /* Để khung luôn nằm giữa cột */
}

.branch-header-box {
    border: 1px solid #fff;
    border-radius: 8px;
    padding: 8px;
    text-align: center;
    font-weight: 700;
    margin-bottom: 12px;
    font-size: 15px;
}

.branch-container {
    background: #fff;
    color: #333;
    border-radius: 15px;
    padding: 20px;
}

.branch-sub {
    font-weight: bold;
    color: #a21d44;
    font-size: 16px;
    text-align: center;
    margin-bottom: 10px;
}

.branch-list {
    max-height: 350px;
    overflow-y: auto;
    padding-right: 5px;
}

.branch-list::-webkit-scrollbar {
    width: 6px;
}

.branch-list::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.branch-list::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 10px;
}

.branch-item {
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px dashed #ddd;
    font-size: 13px;
}

.branch-name {
    color: #a21d44;
    font-weight: 700;
}

.view-more-link {
    text-align: center;
    margin-top: 10px;
    color: #fff;
}

.view-more-link a {
    color: #fff;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
}

/* Reg Box */
.registration-form-box {
    background: #fff;
    border-radius: 15px;
    padding: 25px;
    color: #333;
}

.reg-title {
    color: #a21d44;
    text-align: center;
    font-size: 20px;
    font-weight: 700;
}

.reg-sub {
    text-align: center;
    font-size: 13px;
    margin-bottom: 15px;
}

.form-row {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

.form-row input {
    flex: 1;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

textarea {
    width: 100%;
    height: 80px;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 15px;
    resize: none;
}

.form-button button {
    background: #a21d44;
    color: #fff;
    border: none;
    padding: 10px 40px;
    border-radius: 25px;
    font-weight: 700;
    cursor: pointer;
    text-align: center;
}
</style>