<template>
    <footer id="footer">
        <div class="custom-container">
            <div class="footer-wrapper">
                <!-- Cột 1: Thông tin công ty & Logo -->
                <div class="footer-info">
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
                        <ul class="contact-list">
                            <li class="contact-item">
                                <i class="pi pi-phone"></i>
                                <span>(+84) 914 269 346</span>
                            </li>
                            <li class="contact-item">
                                <i class="pi pi-map-marker"></i>
                                <span>375 Nguyễn Thượng Hiền, Phường 11, Quận 10, TP. Hồ Chí Minh</span>
                            </li>
                            <li class="contact-item">
                                <i class="pi pi-envelope" size="small"></i>
                                <span>cskh@seoulcenter.vn</span>
                            </li>
                            <li class="contact-item">
                                <i class="pi pi-clock"></i>
                                <span><strong>Thời gian làm việc:</strong> Từ 08:45 đến 19:30 hàng ngày</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Cột 2: Chi nhánh -->
                <div class="footer-forms | footer-col">
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
                        <div class="registration-form-box">
                            <h2 class="reg-title">ĐĂNG KÝ NHẬN ƯU ĐÃI</h2>
                            <p class="reg-sub"><i style="color: #000;font-size: 15px;font-weight: bold;">*Chỉ áp dụng
                                    cho 30 khách hàng đăng ký đầu tiên*</i></p>
                            <form @submit.prevent>
                                <div class="form-row two-cols">
                                    <input type="text" placeholder="Họ và Tên">
                                    <input type="tel" placeholder="Số điện thoại">
                                </div>
                                <div class="form-row">
                                    <input type="text" placeholder="Để lại lời nhắn cho chúng tôi">
                                </div>
                                <div class="form-button">
                                    <button type="submit">GỬI THÔNG TIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ticker-container">
                <div class="ticker-text">
                    <p>--------------------------</p>
                    <p>"Mức Độ Hiệu Quả Tùy Vào Cơ Địa Của Mỗi Khách Hàng"</p>
                </div>
                <transition name="fade-slide" mode="out-in">
                    <p :key="currentTextIndex" class="ticker-text">
                        {{ notices[currentTextIndex] }}
                    </p>
                </transition>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const notices = [
    "∙ Quý Khách Hàng Sẽ Được Thực Hiện Dịch Vụ Tại Các Phòng Khám Thuộc Hệ Thống Thẩm Mỹ Quốc Tế Seoul Center Theo Chức Năng ∙",
    "∙ Seoul Center Lưu Ý Quý Khách Hàng ∙"
];

const currentTextIndex = ref(0);
let timer = 0;

onMounted(() => {
    timer = setInterval(() => {
        currentTextIndex.value = (currentTextIndex.value + 1) % notices.length;
    }, 3000);
});

onUnmounted(() => {
    clearInterval(timer);
});

</script>

<style scoped>
/* Styles moved to _footer.css for global responsive optimization */
</style>