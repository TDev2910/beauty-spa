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
    padding: 3rem 0;
    position: relative;
    min-height: auto;
    background-color: #fff;
}

.guarantee-section .custom-container>* {
    margin-inline: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.guarantee-section .gs-img {
    width: 100%;
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}

/* 1. Phần Heading */
.guarantee-section .gs-heading {
    width: 100%;
    max-width: 581px;
    aspect-ratio: 581/576;
    /* Giữ đúng tỷ lệ ảnh gốc */
}

/* 2. Phần Title */
.guarantee-section .gs-title {
    width: 100%;
    max-width: 581px;
    aspect-ratio: 581/169;
    margin-top: -50px;
    /* Nhích lên một chút để chồng nhẹ lên Heading như thiết kế */
    z-index: 2;
}

/* 3. Phần Content */
.guarantee-section .gs-content {
    margin-top: 2rem;
    width: 100%;
    aspect-ratio: 3/1;
}

/* TỐI ƯU CHO PC (Màn hình lớn) */
@media(min-width: 64em) {
    .guarantee-section {
        height: 1000px;
    }

    .guarantee-section .gs-title {
        position: absolute;
        top: 500px;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 0;
    }

    .guarantee-section .gs-content {
        width: 80%;
        margin-top: 4rem;
    }
}
</style>


<script setup>
</script>