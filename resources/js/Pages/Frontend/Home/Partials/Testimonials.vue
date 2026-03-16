<template>
    <div class="testimonials-section">
        <div class="custom-container | flow" style="--flow-spacer:1em">
            <div class="ts-heading">
                <h3 class="ts-title">ĐỊA ĐIỂM LÀM ĐẸP UY TÍN, TIN CẬY CỦA CÁC SAO VIỆT</h3>
            </div>
            <div class="ts-content">
                <Carousel :value="testimonialsList" :numVisible="3" :pt="{
                    indicator: { class: 'hidden' },
                }" :showNavigators="false" :responsiveOptions="responsiveOptions" circular :autoplayInterval="5000">
                    <template #item="slotProps">
                        <div class="ts-item | mx-4 set-bg-img" :style="$getBgStyle(slotProps.data)"></div>
                    </template>
                </Carousel>
            </div>
        </div>
    </div>
    <div class="branch-section">
        <div class="custom-container | flow" style="--flow-spacer:1em">
            <div class="bs-heading">
                <h3 class="bs-title">HOẠT ĐỘNG CHI NHÁNH SEOUL CENTER</h3>
            </div>
            <div class="bs-content">
                <Carousel :value="branchActivityImages" :numVisible="1" :showIndicators="false" :showNavigators="false"
                    circular :autoplayInterval="5000">
                    <template #item="slotProps">
                        <div class="bs-item | set-bg-img" :style="$getBgStyle(slotProps.data)"></div>
                    </template>
                </Carousel>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* TESTIMONIALS SECTION */
.testimonials-section {
    margin-bottom: 1rem;
}

.ts-heading .ts-title {
    font-size: var(--fs-secondary-heading);
    color: var(--primary-color);
    text-align: center;
}

.ts-content .ts-item {
    background-size: cover;
    width: calc(100% - 1rem);
    aspect-ratio: 9/16;
    margin: .5rem;
    border: 1px solid var(--neutral-color-100);
}

/* BRANCH SECTION */
.branch-section{
    padding-bottom: 2rem;
}

.bs-heading .bs-title {
    font-size: var(--fs-primary-heading);
    font-weight: var(--fw-extreme-bold);
    text-align: center;
    background: var(--linear-gradient-color);
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.bs-content {
    border: 1px solid var(--dark-color-600);
    border-radius: .75rem;
    overflow: hidden;
}

.bs-content .bs-item {
    background-size: cover;
    width: 100%;
    aspect-ratio: 2/1;
}
</style>

<script setup>
import { ref } from 'vue';
import Carousel from 'primevue/carousel';
const testimonialsList = ref([
    '/img/testimonial/tes1.jpg',
    '/img/testimonial/tes2.jpg',
    '/img/testimonial/tes3.jpg',
    '/img/testimonial/tes4.jpg',
    '/img/testimonial/tes5.jpg',
]);
const responsiveOptions = ref([
    {
        breakpoint: '1400px',
        numVisible: 2,
        numScroll: 1
    },
    {
        breakpoint: '1199px',
        numVisible: 3,
        numScroll: 1
    },
    {
        breakpoint: '767px',
        numVisible: 2,
        numScroll: 1
    },
    {
        breakpoint: '575px',
        numVisible: 1,
        numScroll: 1
    }
]);

const branchActivityImages = ref([
    '/img/branch-activity/ba1.jpg',
    '/img/branch-activity/ba2.jpg',
    '/img/branch-activity/ba3.jpg',
    '/img/branch-activity/ba4.jpg',
    '/img/branch-activity/ba5.jpg',
]);
</script>