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
        title: '<span style="color: #ec4899; font-weight: 900; font-size: clamp(1.2rem, 5vw, 1.5rem);">ĐỂ LẠI SỐ ĐIỆN THOẠI!</span>',
        html: `
            <p style="font-weight: bold; margin-bottom: 10px; font-size: 15px;">NHẬN CƠ HỘI NÂNG TẦM NHAN SẮC!</p>
            <p style="color: #ff0000; font-weight: 900; font-size: 22px; margin-bottom: 20px;">
               " ${prizeWinner.value} "
            </p>
            <input type="text" id="customer-name" class="swal2-input" placeholder="Họ và tên">
            <input type="tel" id="customer-phone" class="swal2-input" placeholder="Số điện thoại">
        `,
        confirmButtonText: 'NHẬN VOUCHER NGAY',
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
                                    class="img-btn-quay" alt="Quay ngay">
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
/* Styles moved to _lucky-wheel.css for better responsive management */
</style>
