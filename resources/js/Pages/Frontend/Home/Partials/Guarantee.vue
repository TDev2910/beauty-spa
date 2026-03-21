<template>
    <div id="cam-ket" class="guarantee-section">
        <div class="custom-container">
            <div class="gs-heading">
                <div class="gs-img | set-bg-img" :style="$getBgStyle('/img/guarantee/gs-heading.png')"></div>
            </div>
            <div class="gs-title">
                <div class="gs-img | set-bg-img" :style="$getBgStyle('/img/guarantee/gs-title.png')"></div>
            </div>
            <div class="gs-content">
                <div class="gs-img | set-bg-img" :style="$getBgStyle('/img/guarantee/gs-content.png')"></div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.guarantee-section {
    padding-top: 2rem;
    position: relative;
    height: 1000px;
}

.guarantee-section .custom-container>* {
    margin-inline: auto;
}

.guarantee-section .custom-container {
    height: 100%;
}

.guarantee-section .gs-img {
    width: 100%;
    height: 100%;
    background-size: contain;
}

.guarantee-section .gs-heading {
    width: 581px;
    height: 576px;
}

.guarantee-section .gs-title {
    width: 581px;
    height: 169px;
    position: absolute;
    top: 500px;
    left: 50%;
    transform: translateX(-50%);
}

.guarantee-section .gs-content {
    margin-top: 2.5rem;
    width: 100%;
    aspect-ratio: 3/1;
    margin-inline: auto;
}
@media(min-width: 64em) {
    .guarantee-section .gs-content {
        width: 80%;
    }
}
</style>

<script setup>
</script>