<template>
    <div class="customer-experience-section">
        <div class="custom-container">
            <div class="ce-heading">
                <h2 class="ce-title | text-safe">THƯ VIỆN DỊCH VỤ - SEOUL CENTER</h2>
                <h3 class="ce-subtitle | text-safe">HÀNG TRIỆU KHÁCH HÀNG ĐÃ TRẢI NGHIỆM</h3>
            </div>
            <div class="ce-upper-content">
                <h3 class="ce-content-title">DỊCH VỤ THẨM MỸ LÀN DA</h3>
                <div class="ce-video-group | set-bg-img | grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-22"
                    :style="$getBgStyle('/img/customer-experience/ce-bg-img.png')">
                    <template v-for="(video, index) in videos">
                        <div class="ce-video">
                            <template v-if="!videos[index].isPlaying">
                                <div class="ce-video-bg | set-bg-img" :style="$getBgStyle(video.backgroundImg)">
                                    <div class="ce-play-icon" @click="togglePlayingVideo(index)">
                                        <i class="pi pi-play" style="font-size: 1.5rem;color:white"></i>
                                    </div>
                                </div>
                            </template>
                            <template v-else>
                                <iframe :src="video.link + '&autoplay=1&rel=0'" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </template>
                            <div class="ce-video-title | set-bg-img"
                                :style="$getBgStyle('/img/customer-experience/ce-video-title-bg.png')" u>
                                <h3>{{ video.title }}</h3>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            <div class="ce-lower-content">
                <h3 class="ce-content-title">DỊCH VỤ PHUN, XÓA XĂM THẨM MỸ</h3>
                <div class="ce-video-group | set-bg-img"
                    :style="$getBgStyle('/img/customer-experience/ce-bg-img.png')">
                    <template v-for="(video, index) in videos.slice(0,4)">
                        <div class="ce-video">
                            <template v-if="!videos[index].isPlaying">
                                <div class="ce-video-bg | set-bg-img" :style="$getBgStyle(video.backgroundImg)">
                                    <div class="ce-play-icon" @click="togglePlayingVideo(index)">
                                        <i class="pi pi-play" style="font-size: 1.5rem;color:white"></i>
                                    </div>
                                </div>
                            </template>
                            <template v-else>
                                <iframe :src="video.link + '&autoplay=1&rel=0'" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </template>
                            <div class="ce-video-title | set-bg-img"
                                :style="$getBgStyle('/img/customer-experience/ce-video-title-bg.png')" u>
                                <h3>{{ video.title }}</h3>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
@reference "tailwindcss";

.customer-experience-section {
    background: var(--primary-color-200);
    margin-bottom: 1rem;
    min-height: 2400px;
    position: relative;
}

/* ce heading */
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

/* ce content */
.ce-upper-content,.ce-lower-content {
    min-height: 600px;
    height: auto;
    background-size: cover;
    position: relative;
}

/* ce upper content */
.ce-content-title {
    margin-top:3rem;
    text-align: center;
    font-size: var(--fs-normal-heading);
    background-image: var(--reverse-linear-gradient-color);
    color: var(--neutral-color-100);
    padding: .5rem .25rem .5rem .25rem;
    border-radius: 6px;
}

.ce-video-group {
    margin-inline: auto;
    width: calc(100% - 2rem);
    height: auto;
    padding: 4rem 1rem 6rem;
    border-radius: 1.5rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.ce-upper-content .ce-video-group{
    @apply grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-22;
}
.ce-lower-content .ce-video-group{
    @apply grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-22;
}

.ce-video-group .ce-video {
    width: 100%;
    height: 100%;
    position: relative;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
}

.ce-video-group .ce-video .ce-video-bg {
    width: 100%;
    aspect-ratio: 16/9;
    background-size: cover;
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

.ce-video-group .ce-video .ce-video-title {
    width: calc(100% - 2rem);
    background-size: cover;
    border-radius: .75rem;
    position: absolute;
    bottom: -3.75rem;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
}
.ce-upper-content .ce-video-title{
    aspect-ratio: 6/1;
}
.ce-lower-content .ce-video-title{
    aspect-ratio: 8/1;
}

.ce-video-group .ce-video .ce-video-title h3 {
    background: var(--linear-gradient-color);
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: var(--fw-extreme-bold);
    font-size: var(--fs-600);
}

/* ce lower content */
</style>

<script setup>
import { ref } from 'vue';
const videos = ref([
    {
        title: 'COLLAGEN ORGANIC',
        backgroundImg: '/img/customer-experience/ce-video-bg1.jpg',
        link: 'https://www.youtube.com/embed/dPk5IGyUyn0?si=Qcz3yRs_S57ATnd8',
        isPlaying: false,
    },
    {
        title: 'TRỊ MỤN',
        backgroundImg: '/img/customer-experience/ce-video-bg2.jpg',
        link: 'https://www.youtube.com/embed/j4M9XCRf_WY?si=osHRuK1AVPMyPw6u',
        isPlaying: false
    },
    {
        title: 'MESO KHÔNG KIM',
        backgroundImg: '/img/customer-experience/ce-video-bg3.jpg',
        link: "https://www.youtube.com/embed/SFK7oQTrc3A?si=BAsRecPUPRoEhP0o",
        isPlaying: false
    },
    {
        title: 'TRỊ THÂM NÁN',
        backgroundImg: '/img/customer-experience/ce-video-bg4.jpg',
        link: 'https://www.youtube.com/embed/ZYRTYWaXUG4?si=AS7S2RmkXdSVGn-0',
        isPlaying: false
    },
    {
        title: 'TRỊ SẸO, MỤN',
        backgroundImg: '/img/customer-experience/ce-video-bg5.jpg',
        link: "https://www.youtube.com/embed/XcptC9FijH4?si=QJD8Ip2JJ0G6J8go",
        isPlaying: false
    },
    {
        title: 'TRIỆT LÔNG TOÀN THÂN',
        backgroundImg: '/img/customer-experience/ce-video-bg6.jpg',
        link: "https://www.youtube.com/embed/7U79HnjBhf8?si=OV9akoYA1ySGp83G",
        isPlaying: false
    },

])
const togglePlayingVideo = (idx) => {
    const otherVideos = videos.value.filter((_, index) => index !== idx)
    otherVideos.forEach(video => video.isPlaying = false);
    videos.value[idx].isPlaying = true;
}
</script>
