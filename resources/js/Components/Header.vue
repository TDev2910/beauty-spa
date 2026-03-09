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
        <Navbar />
    </header>

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
    display: flex;
    align-items: stretch;
    flex-wrap: wrap;
}

.top-header .th-content .th-combo .th-combo-item{
    background-color: var(--primary-color);
    padding: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0.5rem;
    line-height: 1.2;
    flex:1;
    min-width:0;
}

.top-header .th-content .th-combo .th-combo-item:not(:first-child, :last-child) {
    background-color: var(--dark-color-400);
}

.top-header .th-content .th-combo .th-combo-item span{
    word-break: break-word;
    font-size: var(--fs-700);
}

</style>

<script setup>
import Navbar from '@/Components/Frontend/Navbar.vue';
</script>