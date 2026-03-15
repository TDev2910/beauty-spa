<template>
    <div class="service-section">
        <div class="custom-container">
            <div class="ss-heading | flow" style="--flow-spacer:.5rem">
                <div class="ss-img | set-bg-img" :style="$getBgStyle(serviceHeadingImage)"></div>
                <div class="ss-subtitle">
                    <h3>Trợ Giá Ưu Đãi Tháng ➤ Click Vào Để Xem Chi Tiết</h3>
                </div>
            </div>
            <div class="ss-list">
                <template v-for="(image,i) in serviceImagesList">
                    <div class="ss-item">
                        <div class="ss-item-img | set-bg-img" :style="$getBgStyle(image)"></div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>

<style scoped>
@reference "tailwindcss";

.service-section {
    padding: 3rem 0 1rem;
}

.ss-heading .ss-img {
    background-size: contain;
    width: 70%;
    aspect-ratio: 5/1;
    margin-inline: auto;
}

.ss-heading .ss-subtitle {
    text-align: center;
}

.ss-heading .ss-subtitle h3 {
    font-size: var(--fs-normal-heading);
    font-weight: var(--fw-bold);
    color: var(--dark-color-400);
}

.ss-list {
    @apply grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-8 gap-x-4 mt-2;
}

.ss-list .ss-item .ss-item-img {
    background-size: contain;
    background-position: center top;
    width: 100%;
    aspect-ratio: 3/5;
}
</style>

<script setup>
import { ref } from 'vue';

const serviceHeadingImage = ref('/img/service/service-heading.png');
const serviceImagesList = ref([
    '/img/service/service-item1.png',
    '/img/service/service-item2.png',
    '/img/service/service-item3.png',
    '/img/service/service-item4.png',
    '/img/service/service-item5.png',
    '/img/service/service-item6.png',
    '/img/service/service-item7.png',
    '/img/service/service-item8.png'
]);
</script>
