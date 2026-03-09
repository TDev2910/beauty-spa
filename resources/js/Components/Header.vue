<template>
    <header>
        <div class="top-header">
            <div class="th-bg"></div>
            <div class="th-content | container flex gap-6 justify-between">
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
                <div class="th-combo | flex items-center gap-2">
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
    </header>
    <Navbar />

</template>

<style scoped>
.top-header {
    padding: 0.5rem 0;
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
    width: 112px;
    aspect-ratio: 4/3;
    object-fit: contain;
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
    color: #fff;
    font-size: var(--fs-body);
    font-weight: var(--fw-bold);
    text-align: center;
    gap: 8px;
    align-items: center;
    flex-wrap: wrap;
}

.top-header .th-content .th-combo .th-combo-item {
    padding: 6px 20px;
    border-radius: 50px;
    flex: none; 
    min-width: 110px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #a21d44;
}

.top-header .th-content .th-combo .th-combo-item:nth-child(2) {
    background-color: #0066ff;
    min-width: 90px;
}

.top-header .th-content .th-combo .th-combo-item span {
    color: #fff;
    font-size: 15px;
    font-weight: 900;
    line-height: 1.1;
    text-align: center;
    text-transform: uppercase;
}

.top-header .th-content .th-combo .th-combo-item:nth-child(2) span {
    font-size: 22px;
}
</style>

<script setup>
import Navbar from '@/Components/Frontend/Navbar.vue';
</script>