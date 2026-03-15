<script setup>
import AboutUs from "../Home/Partials/AboutUs.vue";
import Guarantee from "../Home/Partials/Guarantee.vue";
import ServiceCategories from "../Home/Partials/ServiceCategories.vue";
import LibraryService from "../Home/Partials/CustomerEx.vue";
import FloatingContact from "../../../Components/Frontend/FloatingContact.vue";
import LuckyWheel from "@/Components/Frontend/LuckyWheel.vue";
const bannerUrl = "/img/banner-seoul-center.png";
const bannerAlt = "Chương trình tặng Combo PC Fix Seoul Center";
</script>

<template>
    <div class="banner-container">
        <img :src="bannerUrl" :alt="bannerAlt" class="banner-image" loading="lazy" />
    </div>
    <div class="registration-form-box">
        <h2 class="reg-title">MUA 1 DỊCH VỤ TẶNG 1 COMBO TỨ QUÝ</h2>
        <form @submit.prevent>
            <div class="form-row">
                <input type="text" placeholder="Họ và Tên">
                <input type="tel" placeholder="Số điện thoại">
            </div>
            <div class="form-row">
                <select class="full-width">
                    <option value="" disabled selected>Chọn dịch vụ bạn quan tâm</option>
                    <option value="cham-soc-da">Chăm sóc da chuyên sâu</option>
                    <option value="phun-xam">Phun xăm thẩm mỹ</option>
                    <option value="tri-mun">Điều trị mụn/thâm</option>
                    <option value="tri-nam">Điều trị nám/tàn nhang</option>
                    <option value="khac">Dịch vụ khác...</option>
                </select>
            </div>
            <div class="form-button">
                <button type="submit">NHẬN ƯU ĐÃI</button>
            </div>
        </form>
    </div>
    <AboutUs />
    <Guarantee />
    <ServiceCategories />
    <LibraryService />
    <FloatingContact />
    <LuckyWheel />
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

/* Reg Box */
.registration-form-box {
    background: #a21d44;
    padding: 35px 25px;
    color: #fff;
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: 'Inter', sans-serif;
}

.reg-title {
    color: #fff;
    /* Chuyển sang trắng cho dễ nhìn trên nền đỏ */
    text-align: center;
    font-size: 26px;
    font-weight: 900;
    margin-bottom: 25px;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 1px;
}

.form-row {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
    justify-content: center;
}

.form-row input,
.form-row select {
    width: 400px;
    padding: 12px 15px;
    border: none;
    background: #fff;
    border-radius: 8px;
    color: #333;
    font-weight: 500;
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    transition: all 0.3s ease;
}

.form-row select {
    appearance: none;
    /* Xóa mũi tên mặc định của trình duyệt */
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 15px center;
    background-size: 15px;
    cursor: pointer;
}

.form-row select:invalid {
    color: #888;
}

.form-row input.full-width,
.form-row select.full-width {
    width: calc(800px + 15px);
}

.form-row input::placeholder {
    color: #888;
    font-weight: 400;
}

.form-button {
    text-align: center;
    margin-top: 25px;
}

.form-button button {
    background: #a21d44;
    color: #fff;
    border: 2px solid #fff;
    padding: 15px 80px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 20px;
    cursor: pointer;
    font-family: 'Montserrat', sans-serif;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}

.form-button button:hover {
    background: #fff;
    color: #a21d44;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}
</style>
