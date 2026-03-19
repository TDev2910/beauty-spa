<template>
    <div class="banner-container">
        <img :src="bannerUrl" :alt="bannerAlt" class="banner-image" loading="lazy" />
    </div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@700;900&display=swap');

.banner-container {
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
}

.banner-image {
    width: 100%;
    height: auto;
    display: block;
}
</style>

<script setup>
const bannerUrl = "/img/banner/taitro.png";
const bannerAlt = "Tài trợ";
</script>
