<script setup>
import { ref } from 'vue';

const isPopupOpen = ref(false);
</script>

<template>
    <div class="navbar-wrapper">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="/">
                    <img src="https://w.ladicdn.com/s500x400/5977f59d1abc544991d43c5b/seoul_spa_logo_8_3-1-04-min-20250219021940-lqcdy.png"
                        alt="Seoul Center Logo" style="height: 60px; object-fit: contain;">
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="nav-links">
                <a href="#about-us">Về Chúng Tôi</a>
                <a href="#ve-chung-toi">Chương Trình</a>
                <a href="#services">Dịch Vụ</a>
                <a href="#cam-ket">Cam kết</a>
                <a href="#customer-experience">Trải Nghiệm Khách Hàng</a>
                <a href="#footer">Liên Hệ</a>
            </nav>
            <!-- Call to action -->
            <button class="btn-nhan-uu-dai" @click="isPopupOpen = true">Nhận Ưu Đãi</button>
        </div>

        <!-- Popup Overlay -->
        <div v-if="isPopupOpen" class="popup-overlay" @click.self="isPopupOpen = false">
            <div class="popup-content">
                <button class="close-btn" @click="isPopupOpen = false">&times;</button>

                <h3 style="margin-bottom: 5px;">ĐĂNG KÝ NHẬN ƯU ĐÃI</h3>
                <p style="margin-bottom: 20px; color: #666;">Để lại thông tin bác sĩ sẽ tư vấn trực tiếp cho bạn</p>

                <form @submit.prevent="alert('Cảm ơn bạn đã đăng ký!')">
                    <input type="text" placeholder="Họ và tên" required />
                    <input type="tel" placeholder="Số điện thoại" required />
                    <button type="submit" class="btn-submit">GỬI THÔNG TIN</button>
                </form>
            </div>
        </div>
    </div>
</template>
