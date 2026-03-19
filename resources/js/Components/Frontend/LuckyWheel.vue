<script setup>
import { ref, computed } from 'vue';

const isSpinning = ref(false);
const rotation = ref(0);
const prizeWinner = ref(null);

// Số lượng múi trên ảnh vòng quay
const segmentCount = 6;
const sectorAngle = computed(() => 360 / segmentCount);

const spin = () => {
    if (isSpinning.value) return;

    isSpinning.value = true;
    prizeWinner.value = null;

    // Quay ít nhất 5-10 vòng để tạo hiệu ứng
    const extraRounds = 10 + Math.floor(Math.random() * 5);
    // Chọn ngẫu nhiên một ô
    const randomSector = Math.floor(Math.random() * segmentCount);

    // Tính toán góc quay mới
    const targetRotation = rotation.value + (extraRounds * 360) + (randomSector * sectorAngle.value);

    rotation.value = targetRotation;

    // Thời gian transition là 5s
    setTimeout(() => {
        isSpinning.value = false;
        console.log("Kết quả: ", randomSector);
    }, 5000);
};
</script>

<template>
    <section class="lucky-wheel-section">
        <div class="banner-outer">
            <img src="https://w.ladicdn.com/s1440x708/5977f59d1abc544991d43c5b/1-20251029072307-ajvgl.png"
                class="banner-bg" alt="Banner Background">

            <div class="container banner-content">
                <div class="section-header">
                    <h3 class="main-title">
                        AI ĐÓ VỪA TRÚNG LIỆU TRÌNH LÀM ĐẸP MIỄN PHÍ... <br>
                        CÒN BẠN THÌ SAO?
                    </h3>
                </div>

                <div class="branding-box" @click="spin">
                    <div class="branding-container">
                        <img src="https://w.ladicdn.com/s900x650/5977f59d1abc544991d43c5b/titlee-20251029071120-imb84.png"
                            class="img-uudai" alt="Ưu đãi">
                        <div class="btn-quay-ngay-image-overlay">
                            <img src="https://w.ladicdn.com/s650x350/5977f59d1abc544991d43c5b/group-1-20251029071120-lwiv6.png"
                                style="margin-bottom: 30px;margin-left: 35px;" class="img-btn-quay" alt="Quay ngay">
                        </div>
                    </div>
                </div>

                <div class="wheel-box">
                    <div class="wheel-container">
                        <div class="wheel-outer-glow"></div>
                        <div class="wheel-axis">
                            <!-- Khối xoay: Cố định tâm tuyệt đối -->
                            <div class="wheel-main" :style="{ transform: `rotate(${rotation}deg)` }">
                                <img src="https://w.ladicdn.com/s700x700/5977f59d1abc544991d43c5b/vong-quay-20251029070716-mxpe3.png"
                                    class="img-wheel-main" alt="Vòng quay">
                            </div>

                            <!-- Nút nhấn Start cố định ở giữa -->
                            <button class="spin-button-new" @click="spin" :disabled="isSpinning">
                                <img src="https://w.ladicdn.com/source/spin-btn1.svg" class="img-spin-btn" alt="Start">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.lucky-wheel-section {
    padding: 0px 0px;
    background-color: #fff;
    font-family: 'Montserrat', sans-serif;
}

.banner-outer {
    position: relative;
    width: 100%;
    min-height: 700px;
    overflow: hidden;
    display: flex;
    align-items: center;
}

.banner-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: 100% 100%;
    z-index: 1;
}

.banner-content {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 40px 0 40px;
}

.section-header {
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 3;
}

.main-title {
    color: #a21d44;
    font-size: 28px;
    font-weight: 900;
    line-height: 1.3;
    margin-top: -40px;
}

.branding-box {
    flex: 1;
    display: flex;
    justify-content: flex-start;
    margin-left: 60px;
    cursor: pointer;
}

.branding-container {
    position: relative;
    display: inline-block;
}

.img-uudai {
    max-width: 480px;
    height: auto;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.1));
    display: block;
}

.btn-quay-ngay-image-overlay {
    position: absolute;
    bottom: -15px;
    left: 12%;
    width: 360px;
    z-index: 10;
    animation-name: fadeInLeft;
    animation-duration: 2s;
    animation-delay: 2s;
    animation-iteration-count: infinite;
}

.img-btn-quay {
    width: 80%;
    height: auto;
    filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
    display: block;
}

.wheel-box {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    top: -10px;
    left: -220px;
}
    
.wheel-container {
    position: relative;
    width: 450px;
    height: 450px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.wheel-axis {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.wheel-outer-glow {
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(236, 64, 122, 0.2) 0%, transparent 70%);
    pointer-events: none;
}

.wheel-main {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

    /* Hiệu ứng xoay mượt mà */
    transition: transform 5s cubic-bezier(0.15, 0, 0.15, 1);

    /* Bóng đổ tỏa đều xung quanh để KHÔNG bị lệch tâm khi xoay */
    filter: drop-shadow(0 0 20px rgba(0, 0, 0, 0.2));
    will-change: transform;
    z-index: 10;
}

.img-wheel-main {
    width: 85%;
    /* Kích thước ảnh vòng quay */
    height: 85%;
    object-fit: contain;
    margin: 0;
}

.spin-button-new {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 85px;
    height: 85px;
    border: none;
    background: transparent;
    cursor: pointer;
    z-index: 30;
    padding: 0;
}

.img-spin-btn {
    width: 100%;
    height: 100%;
    object-fit: contain;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.2));
}

@media (max-width: 1100px) {
    .wheel-container {
        width: 380px;
        height: 380px;
    }
}

@media (max-width: 991px) {
    .banner-outer {
        min-height: 800px;
    }

    .wheel-box {
        top: 0;
        left: 0;
    }
}

/* Định nghĩa hiệu ứng fadeInLeft */
@keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-1%, 0, 0);
    }

    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

@keyframes fadeInLeftCustom {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>
