<template>
    <div class="top-header">
        <div class="th-bg"></div>
        <div class="custom-container" style="--container-padding:.5rem">
            <div class="th-content | flex gap-6 justify-between items-center">
                <div class="th-left">
                    <div class="th-img">
                        <img src="../../../public/img/top-header-img1.jpeg" alt="Logo" class="ladi-image">
                    </div>
                    <div class="th-slogan">
                        <h2>MỞ KHÓA NHAN SẮC</h2>
                        <span>-</span>
                        <h2>BẮT TRỌN DEAL HỜI</h2>
                    </div>
                </div>
                <div class="th-combo">
                    <div class="th-combo-item">
                        <span>MUA 1 <br> DỊCH VỤ</span>
                    </div>
                    <div class="th-combo-item">
                        <span class="text-blink">TẶNG</span>
                    </div>
                    <div class="th-combo-item">
                        <span>1 COMBO <br> TỨ QUÝ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="marquee">
        <div class="custom-container">
            <span class="text-marquee">
                SEOUL CENTER | ƯU ĐÃI VIP 💎 CHẠM TỚI VẺ ĐẸP HOÀN HẢO – 50 SUẤT ĐẶC QUYỀN DÀNH CHO KHÁCH HÀNG TRONG
                KHU VỰC
            </span>
        </div>
    </div>
    <Navbar />

</template>

<style scoped>
.top-header {
    position: relative;
}

.top-header .th-bg {
    background-image: url('../../../public/img/th-bg-img.png');
    background-size: cover;
    background-repeat: repeat;
    background-position: 50% 0;
    background-origin: content-box;
    background-attachment: scroll;

    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.top-header .container {
    height: 100%;
}

.top-header .th-content {
    position: relative;
    z-index: 1;

    width: 100%;
    height: 100%;
}

.top-header .th-content .th-left {
    display: flex;
    align-items: center;
    gap: .75rem;
}
@media(min-width: 80rem) {
    .top-header .th-content .th-left {
        gap: 3rem;
    }
}

.top-header .th-content .th-img {
    height: 74px;
    display: flex;
    overflow: hidden;
    flex-shrink: 0;
}

.top-header .th-content .th-img img {
    width: auto;
    height: 100%;
    object-fit: contain;
}

.top-header .th-content .th-slogan {
    display: flex;
    align-items: center;
    gap: 1px;
}
.top-header .th-content .th-slogan>* {
    text-align:center;
    font-size: var(--fs-label);
    font-weight: var(--fw-bold);
}

.top-header .th-content .th-slogan h2:first-child {
    color: var(--primary-color);
}

.top-header .th-content .th-slogan h2:last-child {
    color: var(--dark-color-600);
}

.top-header .th-content .th-combo {
    padding: 0.25rem;
    color: #fff;
    font-weight: var(--fw-bold);
    text-align: center;
    display: flex;
    align-items: stretch;
    gap: 0.5rem;
    flex-wrap: nowrap;
}

.top-header .th-content .th-combo .th-combo-item {
    background-color: var(--primary-color);
    padding: .5em 1em;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1em;
    line-height: 1.2;
    flex: 1;
    min-width: 0;
}
.top-header .th-content .th-combo .th-combo-item span {
    font-size: var(--fs-button);
    white-space: nowrap;
}
.top-header .th-content .th-combo .th-combo-item:not(:first-child, :last-child) {
    background-color: var(--dark-color-400);
    flex: 0 0 auto;
}

@media (max-width: 48em) {
    .top-header .th-content .th-combo .th-combo-item {
        padding: 0.25rem;
        /* Ép mỏng khoảng đệm lại để chừa chỗ cho chữ */
    }
}

/* marquee */
.marquee-container {
    position: relative;font-size: var(--fs-label);
}
</style>

<script setup>
import Navbar from '@/Components/Frontend/Navbar.vue';
</script>