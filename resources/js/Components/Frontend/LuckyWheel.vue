<script setup>
import { ref, computed } from 'vue';
import Swal from 'sweetalert2';

const isSpinning = ref(false);
const rotation = ref(0);
const prizeWinner = ref(null);

const prizeLabels = [
    "VOUCHER GIẢM 200K TIỀN MẶT",
    "VOUCHER 1 TRIỆU",
    "VOUCHER MUA 1 TẶNG 1",
    "VOUCHER GIẢM 200K TIỀN MẶT",
    "VOUCHER 1 TRIỆU",
    "VOUCHER MUA 1 TẶNG 1"
];

const segmentCount = prizeLabels.length;
const sectorAngle = computed(() => 360 / segmentCount);

const spin = () => {
    if (isSpinning.value) return;

    isSpinning.value = true;
    prizeWinner.value = null; // Reset data cũ về null

    const extraRounds = 5 + Math.floor(Math.random() * 5);
    const randomSector = Math.floor(Math.random() * segmentCount);

    const targetRotation = rotation.value
        + (extraRounds * 360)
        + (randomSector * sectorAngle.value)
        - (sectorAngle.value / 2);

    rotation.value = targetRotation;

    const actualIndex = (segmentCount - (randomSector % segmentCount)) % segmentCount;
    prizeWinner.value = prizeLabels[actualIndex];
};

const onWheelStop = () => {
    isSpinning.value = false;

    // Hiển thị popup nhập thông tin
    Swal.fire({
        title: '<span style="color: #ec4899; font-size: 24px;">ĐỂ LẠI SỐ ĐIỆN THOẠI!</span>',
        html: `
            <p style="font-weight: bold; margin-bottom: 15px;">NHẬN CƠ HỘI NÂNG TẦM NHAN SẮC!</p>
            <p style="color: red; font-weight: bold; font-size: 20px;">" ${prizeWinner.value} "</p>
            <input type="text" id="customer-name" class="swal2-input" placeholder="Họ và tên">
            <input type="tel" id="customer-phone" class="swal2-input" placeholder="Số điện thoại">
        `,
        confirmButtonText: 'NHẬN VOUCHER',
        confirmButtonColor: '#be185d',
        preConfirm: () => {
            const name = Swal.getPopup().querySelector('#customer-name').value;
            const phone = Swal.getPopup().querySelector('#customer-phone').value;
            if (!name || !phone) {
                Swal.showValidationMessage('Vui lòng nhập đầy đủ họ tên và số điện thoại!');
            }
            return { name, phone };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            console.log("Dữ liệu gửi đi:", result.value);
        }
    });
};
</script>

<template>
    <section class="lucky-wheel-section">
        <div class="banner-img | set-bg-img" :style="$getBgStyle('/img/lucky-wheel/banner-bg.png')"></div>
        <div class="banner-outer">
            <div class="custom-container">
                <div class="banner-header">
                    <h3 class="main-title">
                        AI ĐÓ VỪA TRÚNG LIỆU TRÌNH LÀM ĐẸP MIỄN PHÍ... <br>
                        CÒN BẠN THÌ SAO?
                    </h3>
                </div>
                <div class="banner-content">
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
                                <div class="wheel-main" :style="{ transform: `rotate(${rotation}deg)` }"
                                    @transitionend="onWheelStop">
                                    <img src="https://w.ladicdn.com/s700x700/5977f59d1abc544991d43c5b/vong-quay-20251029070716-mxpe3.png"
                                        class="img-wheel-main" alt="Vòng quay">
                                </div>
                                <button class="spin-button-new" @click="spin" :disabled="isSpinning">
                                    <img src="https://w.ladicdn.com/source/spin-btn1.svg" class="img-spin-btn"
                                        alt="Start">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* =========================================
   1. BASE - MOBILE FIRST (< 48em) 
   ========================================= */
.lucky-wheel-section {
    position: relative;
    background-color: #fff;
    font-family: 'Montserrat', sans-serif;
    /* Không dùng height: 1000px nữa, dùng padding để nội dung tự đẩy chiều cao */
    padding: 4rem 0 6rem 0;
    margin: var(--size-800) 0;
    overflow: hidden;
}

.banner-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    z-index: 0;
    /* Ảnh nền chìm dưới cùng */
}

.banner-outer {
    position: relative;
    z-index: 1;
    /* Nổi lên trên ảnh nền */
    width: 100%;
}

.banner-header {
    text-align: center;
    margin-bottom: 3rem;
    /* Đẩy nội dung bên dưới cách ra một khoảng */
}

.main-title {
    color: var(--primary-color);
    font-size: var(--fs-secondary-heading);
    font-weight: var(--fw-extreme-bold);
    line-height: 1.3;
    margin: 0;
}

/* Nội dung xếp dọc trên Mobile */
.banner-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4rem;
    width: 100%;
}

/* Phần Ưu đãi */
.branding-box {
    width: 100%;
    display: flex;
    justify-content: center;
    cursor: pointer;
}

.branding-container {
    position: relative;
    max-width: 90%;
    /* Thu nhỏ lại 1 chút trên mobile */
}

.img-uudai {
    width: 100%;
    max-width: 400px;
    height: auto;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.1));
    display: block;
}

.btn-quay-ngay-image-overlay {
    position: absolute;
    bottom: -15%;
    left: 5%;
    width: 90%;
    max-width: 320px;
    z-index: 10;
    animation: fadeInLeft 2s infinite 2s;
}

.img-btn-quay {
    width: 100%;
    height: auto;
    filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
    display: block;
}

/* Phần Vòng quay */
.wheel-box {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: var(--size-400);
    transform: translate(200px,-20px)
}

.wheel-container {
    position: relative;
    width: 320px;
    /* Kích thước nhỏ gọn cho Mobile */
    height: 320px;
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
    transition: transform 5s cubic-bezier(0.15, 0, 0.15, 1);
    filter: drop-shadow(0 0 20px rgba(0, 0, 0, 0.2));
    will-change: transform;
    z-index: 10;
}

.img-wheel-main {
    width: 85%;
    height: 85%;
    object-fit: contain;
    margin: 0;
}

.spin-button-new {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 65px;
    height: 65px;
    /* Nút nhỏ hơn trên mobile */
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

/* =========================================
   2. TABLET (min-width: 48em / ~768px)
   ========================================= */
@media(min-width: 48em) {
    .wheel-box {
        transform: translate(200px,-40px);
    }

    .wheel-container {
        width: 400px;
        height: 400px;
    }

    .img-uudai {
        max-width: 480px;
    }

    .spin-button-new {
        width: 80px;
        height: 80px;
    }
}

/* =========================================
   3. DESKTOP (min-width: 64em / ~1024px)
   ========================================= */
@media(min-width: 64em) {
    .lucky-wheel-section {
        padding: 6rem 0;
        /* Cho không gian thoáng hơn ở desktop */
    }

    /* KÍCH HOẠT LƯỚI GRID 2 CỘT */
    .banner-content {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 2rem;
    }

    /* Đẩy khối hình ảnh sang lề phải của cột trái để đứng sát vòng quay */
    .branding-box {
        justify-content: flex-end;
        padding-right: 2rem;
    }

    /* Đẩy khối vòng quay sang lề trái của cột phải */
    .wheel-box {
        justify-content: flex-start;
        padding-left: 0;
        transform: translateX(-40px);
    }

    .wheel-container {
        width: 450px;
        height: 450px;
    }

    .spin-button-new {
        width: 85px;
        height: 85px;
    }
}

/* =========================================
   4. ANIMATIONS
   ========================================= */
@keyframes fadeInLeft {
    0% {
        opacity: 0;
        transform: translate3d(-20%, 0, 0);
    }

    100% {
        opacity: 1;
        transform: none;
    }
}
</style>
