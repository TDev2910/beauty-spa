<template>
    <div class="top-header">
        <div class="th-bg"></div>
        <div class="custom-container" style="--container-padding:.5rem">
            <div class="th-content">
                <!-- Cột trái: Ảnh logo/nhân vật -->
                <div class="th-left">
                    <img src="../../../public/img/top-header-img1.jpeg" alt="Logo" class="th-img">
                </div>

                <!-- Cột phải: Bao gồm Slogan và Combo -->
                <div class="th-right">
                    <div class="th-slogan">
                        <h2 class="text-primary">MỞ KHÓA NHAN SẮC</h2>
                        <span class="dash">-</span>
                        <h2 class="text-dark">BẮT TRỌN DEAL HỜI</h2>
                    </div>

                    <div class="th-combo">
                        <div class="th-item bg-red">MUA 1 DV</div>
                        <div class="th-item bg-blue text-blink">TẶNG</div>
                        <div class="th-item bg-red">1 COMBO TỨ QUÝ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="marquee">
        <div class="custom-container">
            <span class="text-marquee">
                SEOUL CENTER | ƯU ĐÃI VIP 💎 CHẠM TỚI VẺ ĐẸP HOÀN HẢO – 50 SUẤT ĐẶC QUYỀN DÀNH CHO KHÁCH HÀNG TRONG KHU
                VỰC
            </span>
        </div>
    </div>
    <Navbar />
</template>

<style scoped>
.top-header {
    position: relative;
    overflow: hidden;
}

.top-header .th-bg {
    background-image: url('../../../public/img/th-bg-img.png');
    background-size: cover;
    background-position: center;
    position: absolute;
    inset: 0;
}

.th-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    padding: 5px 0;
}

/* Ảnh bên trái */
.th-left .th-img {
    height: 70px;
    width: auto;
    display: block;
}

/* Khối bên phải */
.th-right {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
}

.th-slogan {
    display: flex;
    align-items: center;
    gap: 5px;
}

.th-slogan h2 {
    font-size: 14px;
    font-weight: 900;
    margin: 0;
    white-space: nowrap;
}

.th-slogan .dash {
    color: var(--primary-color);
    font-weight: 900;
}

.text-primary {
    color: var(--primary-color);
}

.text-dark {
    color: #003057;
}

/* Các ô Combo */
.th-combo {
    display: flex;
    gap: 5px;
    width: 100%;
}

.th-item {
    padding: 4px 12px;
    color: #fff;
    font-size: 11px;
    font-weight: 800;
    border-radius: 50px;
    /* Bo tròn dạng thuốc giống mẫu */
    text-align: center;
    white-space: nowrap;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bg-red {
    background-color: var(--primary-color);
}

.bg-blue {
    background-color: #1e63d3;
}

/* Màu xanh giống mẫu */

/* TỐI ƯU MOBILE */
@media (max-width: 48em) {
    .th-left .th-img {
        height: 55px;
    }

    .th-slogan h2 {
        font-size: 10px;
    }

    .th-item {
        padding: 3px 8px;
        font-size: 9px;
    }
}

@media (max-width: 30em) {
    .th-content {
        gap: 8px;
    }

    .th-left .th-img {
        height: 45px;
    }

    .th-slogan h2 {
        font-size: 9px;
    }
}
</style>
