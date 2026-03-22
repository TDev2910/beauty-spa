<template>
    <div id="about-us" class="about-us-section">
        <div class="custom-container">
            <div class="au-heading | flow" style="--flow-spacer:0.125rem">
                <h3 class="au-title | text-safe">THẨM MỸ VIỆN</h3>
                <h2 class="au-subtitle | text-safe">SEOUL CENTER</h2>
            </div>
            <div class="au-content | even-columns">
                <div class="au-content-left | text-center-only-md flow" style="--flow-spacer:1em">
                    <p class="au-text">
                        Hệ thống Thẩm Mỹ Seoul Center là thương hiệu uy tín, chất lượng với nhiều chi nhánh trong và
                        ngoài
                        nước. Seoul Center đi đầu trong ngành Làm đẹp- Thẩm mỹ, không ngừng cập nhật những xu hướng mới
                        nhất
                        từ các nước phát triển, ứng dụng thành công tại Việt Nam.
                    </p>
                    <p class="au-text">
                        Thương hiệu xây dựng hệ thống cơ sở vật chất sang trọng, đẳng cấp với phòng dịch vụ tiêu chuẩn 5
                        sao, phòng chờ khách vip thoải mái, tiện nghi. Cùng với hội đồng bác sĩ chuyên khoa giàu kinh
                        nghiệm.
                    </p>
                    <p class="au-text">
                        Là địa chỉ tin cậy, đem đến nhiều dịch vụ chất lượng. Nổi bật nhất là những dịch vụ spa, thẩm mỹ
                        ngoại khoa, phun xăm.
                    </p>
                    <p class="au-text">
                        Tất cả phương pháp đều được chuyển giao từ những nước phát triển, đảm bảo tiêu chuẩn an toàn,
                        chất
                        lượng, áp dụng thành công cho hàng triệu khách hàng.
                    </p>
                </div>
                <div class="au-content-right | text-center-only-md">
                    <div class="au-gallery">
                        <template v-for="(image, i) in imagesList">
                            <div class="gallery-item">
                                <div class="gallery-img | set-bg-img" :style="$getBgStyle(image)"></div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* 1. SECTION & LAYOUT */
.about-us-section {
    background-color: var(--primary-color-200);
    padding: 2rem 0 4rem 0;
}

.au-content {
    align-items: center;
    gap: 4rem;
    margin-top: 1.5rem;
}

/* 2. HEADING STYLES */
.au-heading {
    text-align: center;
    margin-bottom: 0.5rem;
    font-weight: var(--fw-extreme-bold);
}

.au-heading > * {
    margin: 0;
}

.au-heading .au-title {
    font-size: var(--fs-primary-heading);
    line-height: 1.2;
    background: var(--linear-gradient-color);
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.au-heading .au-subtitle {
    font-size: calc(var(--fs-primary-heading) - 0.5rem);
    color: var(--primary-color);
}

/* 3. TEXT STYLES */
.au-content-left .au-text {
    margin-top: 1rem;
    font-weight: var(--fw-bold);
    color: var(--dark-color-600);
}

/* 4. GALLERY BASE STYLES */
.au-gallery {
    position: relative;
    width: 470px;
    height: 470px;
}

.au-gallery .gallery-item {
    border: 2px solid var(--primary-color);
    overflow: hidden;
}

.au-gallery .gallery-item .gallery-img {
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
}

/* 5. INDIVIDUAL GALLERY ITEMS POSITION */
.au-gallery .gallery-item:nth-child(1) {
    width: 252px;
    height: 252px;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 10px 40px;
}

.au-gallery .gallery-item:nth-child(2) {
    width: 182px;
    height: 182px;
    position: absolute;
    top: 259px;
    left: 258px;
    border-radius: 10px 40px;
}

.au-gallery .gallery-item:nth-child(3) {
    width: 212px;
    height: 212px;
    position: absolute;
    top: 40px;
    left: 258px;
    border-radius: 40px 10px;
}

.au-gallery .gallery-item:nth-child(4) {
    width: 212px;
    height: 212px;
    position: absolute;
    top: 259px;
    left: 40px;
    border-radius: 40px 10px;
}

/* 6. RESPONSIVE OPTIMIZATION (MOBILE & TABLET) */
@media (max-width: 64em) {
    .about-us-section {
        padding: 3rem 0;
    }

    .au-content {
        gap: 2rem;
        text-align: center;
    }

    .au-content-left .au-text {
        font-size: 15px;
        line-height: 1.6;
    }

    .au-content-right {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 1rem;
        overflow: hidden;
    }

    .au-gallery {
        flex-shrink: 0;
        transform: scale(0.8);
        transform-origin: center center;
        margin: 0 auto;
        position: relative;
        left: 0;
    }
}

@media (max-width: 30em) {
    .au-gallery {
        transform: scale(0.65);
        margin: -60px 0;
    }

    .au-heading .au-title {
        font-size: clamp(1.5rem, 6vw, 2.2rem);
    }

    .au-heading .au-subtitle {
        font-size: 1.2rem;
    }
}
</style>

<script setup>
import { ref } from 'vue';
let imagesList = ref([
    '/img/about-us/au-img1.jpg',
    '/img/about-us/au-img2.png',
    '/img/about-us/au-img3.jpg',
    '/img/about-us/au-img4.png',
]);
</script>