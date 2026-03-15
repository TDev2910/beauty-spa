<script setup>
import { ref, computed } from 'vue';

const isSpinning = ref(false);
const rotation = ref(0);
const prizeWinner = ref(null);

// Số lượng múi trên ảnh vòng quay mới
const segmentCount = 6;
const sectorAngle = computed(() => 360 / segmentCount);

const spin = () => {
    if (isSpinning.value) return;
    isSpinning.value = true;
    prizeWinner.value = null;

    const randomExtraRounds = 10 + Math.floor(Math.random() * 5);
    const randomSector = Math.floor(Math.random() * segmentCount);
    const targetRotation = rotation.value + (randomExtraRounds * 360) + (randomSector * sectorAngle.value);

    rotation.value = targetRotation;

    setTimeout(() => {
        isSpinning.value = false;
        // Logic trúng thưởng có thể cập nhật lại sau khi biết chính xác các múi trên ảnh
        console.log("Đã quay xong!");
    }, 5000);
};

function polarToCartesian(centerX, centerY, radius, angleInDegrees) {
    var angleInRadians = (angleInDegrees - 90) * Math.PI / 180.0;
    return {
        x: centerX + (radius * Math.cos(angleInRadians)),
        y: centerY + (radius * Math.sin(angleInRadians))
    };
}

function describeArc(x, y, radius, startAngle, endAngle) {
    var start = polarToCartesian(x, y, radius, endAngle);
    var end = polarToCartesian(x, y, radius, startAngle);
    var largeArcFlag = endAngle - startAngle <= 180 ? "0" : "1";
    return [
        "M", x, y,
        "L", start.x, start.y,
        "A", radius, radius, 0, largeArcFlag, 0, end.x, end.y,
        "Z"
    ].join(" ");
}
</script>

<template>
    <section class="lucky-wheel-section">
        <div class="banner-outer">
            <!-- Background Image Chất lượng cao -->
            <img src="https://w.ladicdn.com/s1440x708/5977f59d1abc544991d43c5b/1-20251029072307-ajvgl.png"
                class="banner-bg" alt="Banner Background">

            <div class="container banner-content">
                <div class="section-header">
                    <h3 class="main-title">
                        AI ĐÓ VỪA TRÚNG LIỆU TRÌNH LÀM ĐẸP MIỄN PHÍ... <br>
                        CÒN BẠN THÌ SAO?
                    </h3>
                </div>

                <!-- Left: Image Branding (uudai.jpg) -->
                <div class="branding-box" @click="spin">
                    <div class="branding-container">
                        <img src="https://w.ladicdn.com/s900x650/5977f59d1abc544991d43c5b/titlee-20251029071120-imb84.png"
                            class="img-uudai" alt="Ưu đãi">

                        <!-- Ảnh lồng ảnh: Nút QUAY NGAY (Image overlay) -->
                        <div class="btn-quay-ngay-image-overlay">
                            <img src="https://w.ladicdn.com/s650x350/5977f59d1abc544991d43c5b/group-1-20251029071120-lwiv6.png"
                                style="margin-bottom: 30px;margin-left: 35px;" class="img-btn-quay" alt="Quay ngay">
                        </div>
                    </div>
                </div>

                <!-- Right: Interactive Wheel -->
                <div class="wheel-box">
                    <div class="wheel-container">
                        <!-- Hiệu ứng viền phát sáng -->
                        <div class="wheel-outer-glow"></div>

                        <!-- CHÍNH GIỮA: Hệ trục xoay -->
                        <div class="wheel-axis">
                            <!-- Vòng quay xoay quanh tâm axis -->
                            <div class="wheel-main" :style="{ transform: `rotate(${rotation}deg)` }">
                                <img src="https://w.ladicdn.com/s700x700/5977f59d1abc544991d43c5b/vong-quay-20251029070716-mxpe3.png"
                                    class="img-wheel-main" alt="Vòng quay">
                            </div>

                            <!-- Nút Start cố định ở tâm axis -->
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
    /* Tăng chiều cao để hiển thị được nhiều background hơn */
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
    /* Ép ảnh hiển thị đầy đủ 100%, không bị cắt góc */
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
    /* Giảm từ 100px xuống 40px để sát mép hơn */
}

.section-header {
    position: absolute;
    top: 10px;
    /* Đưa tiêu đề lên sát mép trên hơn */
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

/* Branding Box với Ảnh uudai.jpg */
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
    transition: transform 0.3s ease;
}


.img-uudai {
    max-width: 480px;
    height: auto;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.1));
    pointer-events: none;
    display: block;
}

/* Hiệu ứng ảnh lồng ảnh (Sử dụng ảnh QUAY NGAY overlay) */
.btn-quay-ngay-image-overlay {
    position: absolute;
    bottom: -15px;
    /* Điều chỉnh để đè lên phần dưới của ảnh tiêu đề */
    left: 50%;
    transform: translateX(-50%);
    width: 360px;
    /* Điều chỉnh độ rộng nút cho cân đối */
    z-index: 10;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.img-btn-quay {
    width: 80%;
    height: auto;
    filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
    display: block;
}

/* Wheel Box */
.wheel-box {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    top: -20px;
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
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 5s cubic-bezier(0.15, 0, 0.15, 1);
    filter: drop-shadow(0 15px 35px rgba(0, 0, 0, 0.25));
}

.img-wheel-main {
    width: 85%;
    height: 100%;
    object-fit: contain;
    filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.1));
    margin-top: -25px;
}

/* Text styles in Wheel */
.text-type {
    font-size: 2.2px;
    font-weight: 700;
    fill: #ad1457;
    text-anchor: middle;
    text-transform: uppercase;
}

.text-name {
    font-size: 3.2px;
    font-weight: 900;
    fill: #fff;
    text-anchor: middle;
}

.text-sub {
    font-size: 1.8px;
    font-weight: 600;
    fill: #ad1457;
    text-anchor: middle;
    text-transform: uppercase;
}

.spin-button-new {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* Căn giữa tuyệt đối so với wheel-axis */
    width: 85px;
    /* Điều chỉnh kích thước nút start cho vừa vặn */
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

    .img-uudai {
        max-width: 350px;
    }
}

@media (max-width: 991px) {
    .banner-outer {
        min-height: 800px;
    }

    .banner-content {
        flex-direction: column;
        gap: 60px;
        align-items: center;
    }

    .img-uudai {
        max-width: 300px;
    }

    .wheel-box {
        top: 0;
    }
}
</style>
