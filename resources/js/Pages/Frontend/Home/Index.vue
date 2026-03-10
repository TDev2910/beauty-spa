<script setup>
const bannerUrl = "/img/banner-seoul-center.png";
const bannerAlt = "Chương trình tặng Combo PC Fix Seoul Center";
</script>

<template>
    <div class="banner-container">
        <img :src="bannerUrl" :alt="bannerAlt" class="banner-image" loading="lazy" />
    </div>
    <div class="registration-form-box">
        <h2 class="reg-title">ĐĂNG KÝ NHẬN ƯU ĐÃI</h2>
        <p class="reg-sub"><i style="color: #000;font-size: 15px;font-weight: bold;">*Chỉ áp dụng cho 30 khách hàng đăng
                ký đầu tiên*</i></p>
        <form @submit.prevent>
            <div class="form-row">
                <input type="text" placeholder="Họ và Tên">
                <input type="tel" placeholder="Số điện thoại">
            </div>
            <div class="form-row" style="height: 50px;">
                <input type="text" placeholder="Để lại lời nhắn cho chúng tôi">
            </div>
            <div class="form-button">
                <button type="submit">GỬI THÔNG TIN</button>
            </div>
        </form>
    </div>
</template>

<style scoped>
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

.registration-form-box {
    background: #fff;
    border-radius: 15px;
    padding: 25px;
    color: #333;
}


</style>