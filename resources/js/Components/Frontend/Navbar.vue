<template>
    <div class="navbar-wrapper">
        <div class="custom-container">
            <div class="nav-content">
                <!-- Logo -->
                <div class="nav-logo">
                    <img src="https://w.ladicdn.com/s500x400/5977f59d1abc544991d43c5b/seoul_spa_logo_8_3-1-04-min-20250219021940-lqcdy.png"
                        alt="Seoul Center Logo">
                </div>

                <!-- Navigation Links -->
                <nav class="nav-menu">
                    <a href="#about-us">Về Chúng Tôi</a>
                    <a href="#ve-chung-toi">Chương Trình</a>
                    <a href="#services">Dịch Vụ</a>
                    <a href="#cam-ket">Cam kết</a>
                    <a href="#customer-experience">Trải Nghiệm Khách Hàng</a>
                    <a href="#footer">Liên Hệ</a>
                </nav>

                <!-- Mobile menu button -->
                <Button class="mobile-menu-btn" icon="pi pi-bars" @click="visibleSidebar = true" />

                <!-- Call to action button -->
                <button class="nav-btn btn-nhan-uu-dai" @click="isPopupOpen = true">Nhận Ưu Đãi</button>
            </div>
        </div>

        <!-- Mobile nav sidebar (max-width: 64em)-->
        <Drawer v-model:visible="visibleSidebar">
            <template #container="{ closeCallback }">
                <div class="sidebar | flex flex-col h-full p-4">
                    <div class="flex items-center justify-end px-6 pt-4 shrink-0">
                        <span>
                            <Button type="button" @click="closeCallback" icon="pi pi-times" rounded></Button>
                        </span>
                    </div>
                    <div class="flex-1 | overflow-y-auto">
                        <ul class="sidebar-menu | list-none p-4 m-0 h-full">
                            <li>
                                <a href="#about-us">Về Chúng Tôi</a>
                            </li>
                            <li>
                                <a href="#ve-chung-toi">Chương Trình</a>
                            </li>
                            <li>
                                <a href="#services">Dịch Vụ</a>
                            </li>
                            <li>
                                <a href="#cam-ket">Cam kết</a>
                            </li>
                            <li>
                                <a href="#customer-experience">Trải Nghiệm Khách Hàng</a>
                            </li>
                            <li>
                                <a href="#footer">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </template>
        </Drawer>

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

<style scoped>
/*sidebar */
.sidebar {
    background: var(--neutral-color-150);
}

.sidebar-menu {
    display: flex;
    flex-direction: column;
    gap: .25rem;
}

.sidebar-menu li{
    padding: .75em 1em;
}
.sidebar-menu li:hover {
    background: var(--primary-color-200);
}

.sidebar-menu a {
    color: var(--primary-color);
}
</style>

<script setup>
import { ref } from 'vue';
import Drawer from 'primevue/drawer';
import Button from 'primevue/button';

const isPopupOpen = ref(false);
const visibleSidebar = ref(false);
</script>
