<template>
    <div class="customer-experience-section">
        <div class="custom-container">
            <div class="ce-heading">
                <h2 class="ce-title | text-safe">THƯ VIỆN DỊCH VỤ - SEOUL CENTER</h2>
                <h3 class="ce-subtitle | text-safe">HÀNG TRIỆU KHÁCH HÀNG ĐÃ TRẢI NGHIỆM</h3>
            </div>
            <div class="ce-content">
                <h3 class="ce-content-title">DỊCH VỤ THẨM MỸ LÀN DA</h3>
                <div class="ce-video-group | set-bg-img | grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-4"
                    :style="$getBgStyle('/img/customer-experience/ce-bg-img.png')">
                    <template v-for="(state, index) in playingVideoStates">
                        <div class="ce-video">
                            <template v-if="playingVideoStates[index]" class="ce-video-preview">
                                <div class="ce-video-bg | set-bg-img"
                                    :style="$getBgStyle('/img/customer-experience/ce-video-bg1.jpg')">
                                    <div class="ce-play-icon" @click="playingVideoStates[index] = false">
                                        <i class="pi pi-play" style="font-size: 1.5rem;color:white"></i>
                                    </div>
                                </div>
                            </template>
                            <template v-else>
                                <iframe
                                    src="https://www.youtube.com/embed/dPk5IGyUyn0?si=Qcz3yRs_S57ATnd8&autoplay=1&rel=0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </template>
                            <div class="ce-video-title | set-bg-img"
                                :style="$getBgStyle('/img/customer-experience/ce-video-title-bg.png')" u>
                                <h3>COLLAGEN ORGANIC</h3>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.customer-experience-section {
    background: var(--primary-color-200);
    margin-bottom: 1rem;
    min-height: 1000px;
    position: relative;
}

.ce-heading {
    text-align: center;
    font-weight: var(--fw-extreme-bold);
}

.ce-heading .ce-title {
    font-size: var(--fs-primary-heading);
    background-image: var(--linear-gradient-color);
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.ce-heading .ce-subtitle {
    font-size: var(--fs-secondary-heading);
    color: var(--dark-color-600);
}

.ce-content {
    height: 600px;
    background-size: cover;
    position: relative;
}

.ce-content .ce-content-title {
    margin-top: 3rem;
    text-align: center;
    font-size: var(--fs-normal-heading);
    background-image: var(--reverse-linear-gradient-color);
    color: var(--neutral-color-100);
    padding: .5rem .25rem 1.5rem .25rem;
    border-radius: 6px;
}

.ce-content .ce-video-group {
    position: absolute;
    top: 3rem;
    left: 50%;
    transform: translateX(-50%);
    width: calc(100% - 2rem);
    height: 100%;
    padding: .75rem .5rem .5rem;
    border-radius: 1.5rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.ce-video-group .ce-video {
    background-image: url('https://img.youtube.com/vi/dPk5IGyUyn0/hqdefault.jpg');
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 200px;
    position: relative
}

.ce-video-group .ce-video .ce-video-bg {
    width: 100%;
    height: 100%;
}

.ce-video-group .ce-video .ce-video-bg .ce-play-icon {
    background-color: rgba(0, 0, 0, 0.5);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.ce-video-group .ce-video iframe {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.ce-video-group .ce-video .ce-video-title{
    width: 100%;
    aspect-ratio: 5/1;
    background-size:contain;
    position: absolute;
    bottom: -4.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.ce-video-group .ce-video .ce-video-title h3{
    background: var(--linear-gradient-color);
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: var(--fw-extreme-bold);
    font-size: var(--fs-600);
}
</style>

<script setup>
import { ref } from 'vue';
const linkVideo = "https://img.youtube.com/vi/dPk5IGyUyn0/hqdefault.jpg";
const playingVideoStates = ref(Array(6).fill(true));
</script>
