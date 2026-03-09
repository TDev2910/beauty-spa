<template>
    <header>
        <div class="top-header">
            <div class="th-bg"></div>
            <div class="container">
                <div class="th-content | flex gap-6 justify-between items-stretch">
                    <div class="th-left">
                        <div class="th-img">
                            <img src="../../../public/img/top-header-img1.jpeg" alt="Logo" class="ladi-image">
                        </div>
                        <div class="th-slogan | flex items-center gap-1">
                            <h2>MỞ KHÓA NHAN SẮC</h2>
                            <span class="fw-bold text-3xl">-</span>
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
            <div class="container">
                <span class="text-marquee">
                    SEOUL CENTER | ƯU ĐÃI VIP 💎 CHẠM TỚI VẺ ĐẸP HOÀN HẢO – 50 SUẤT ĐẶC QUYỀN DÀNH CHO KHÁCH HÀNG TRONG
                    KHU VỰC
                </span>
            </div>
        </div>
        <Navbar />
    </header>

</template>

<style scoped>
.top-header {
    height: 74px;
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

.top-header .container{
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
    gap: 3rem;
}

.top-header .th-content .th-img {
    height: 100%;
    aspect-ratio: 4/3;
    object-fit: contain;
    overflow: hidden;
}

.top-header .th-content .th-slogan h2:first-child {
    font-size: var(--fs-secondary-heading);
    font-weight: var(--fw-bold);
    color: var(--primary-color);
}

.top-header .th-content .th-slogan h2:last-child {
    font-size: var(--fs-secondary-heading);
    font-weight: var(--fw-bold);
    color: var(--dark-color-600);
}

.top-header .th-content .th-combo {
    padding: 0.25rem;
    color: #fff;
    font-size: var(--fs-body);
    font-weight: var(--fw-bold);
    text-align: center;
    display: flex;
    align-items: stretch;
    gap: 0.5rem;
    flex-wrap: nowrap;
}

.top-header .th-content .th-combo .th-combo-item {
    min-width: 140px;
    background-color: var(--primary-color);
    padding-inline: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1.25rem;
    line-height: 1.2;
    flex: 1;
    min-width: 0;
}

.top-header .th-content .th-combo .th-combo-item:not(:first-child, :last-child) {
    background-color: var(--dark-color-400);
    flex: 0 0 auto;
}

.top-header .th-content .th-combo .th-combo-item span {
    font-size: var(--fs-700);
    white-space: nowrap;
}

@media (max-width: 768px) {
    .top-header .th-content .th-combo .th-combo-item {
        padding: 0.25rem; /* Ép mỏng khoảng đệm lại để chừa chỗ cho chữ */
    }
    
    .top-header .th-content .th-combo .th-combo-item span {
        /* Thu nhỏ cỡ chữ xuống mức mặc định thay vì dùng fs-700 to đùng */
        font-size: var(--fs-body); 
    }
}

/* marquee */
.marquee-container {
    position: relative;
}
</style>

<script setup>
import Navbar from '@/Components/Frontend/Navbar.vue';
</script>