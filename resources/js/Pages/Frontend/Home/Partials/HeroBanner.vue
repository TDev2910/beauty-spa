<template>
    <div class="banner-container">
        <img :src="bannerUrl" :alt="bannerAlt" class="banner-image" loading="lazy" />
    </div>
    <div class="registration-form-box">
        <div class="custom-container">
            <h2 class="reg-title">MUA 1 DỊCH VỤ TẶNG 1 COMBO TỨ QUÝ</h2>
            <form @submit.prevent>
                <div class="form-row | even-columns">
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

/* Reg Box */
.registration-form-box {
    background: var(--primary-color);
    padding: 35px 25px;
    color: var(--neutral-color-100);
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: 'Inter', sans-serif;
    border-radius: 0 !important;

}

.reg-title {
    color: #fff;
    text-align: center;
    font-size: clamp(1.2rem, 3vw, 1.8rem);
    font-weight: 900;
    margin-bottom: 30px;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.form-row {
    width: 100%;
    max-width: 900px;
    margin-inline: auto;
    margin-bottom: 20px;
}

.form-row input,
.form-row select {
    width: 100%;
    padding: 15px 20px;
    border: none;
    background: #fff;
    border-radius: 12px;
    color: #003057;
    font-weight: 700;
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.form-row select {
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23003057' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 20px center;
    background-size: 12px;
    cursor: pointer;
}

.form-row select:invalid {
    color: #888;
}

.form-row input::placeholder {
    color: #888;
    font-weight: 500;
}

.form-button {
    text-align: center;
    margin-top: 25px;
}

.form-button button {
    background: #a21d44;
    color: #fff;
    border: 2px solid #fff;
    padding: 12px 80px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 20px;
    cursor: pointer;
    font-family: 'Montserrat', sans-serif;
    transition: all 0.3s ease;
}

.form-button button:hover {
    background: #fff;
    color: #a21d44;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

@media (max-width: 48em) {
    .form-button button {
        padding: 15px 40px;
        /* Giảm padding ngang để chữ không bị tràn */
        font-size: 16px;
        /* Giảm nhẹ size chữ để vừa với màn hình nhỏ */
        width: 100%;
        /* Có thể để 100% để nút dài đều đẹp như các ô input */
        max-width: 300px;
        /* (Tùy chọn) Giới hạn độ rộng nếu không muốn quá dài */
    }

    .registration-form-box {
        padding: 25px 15px;
        /* Giảm padding của khung bao ngoài cho gọn */
    }
}
</style>

<script setup>
const bannerUrl = "/img/banner-seoul-center.png";
const bannerAlt = "Chương trình tặng Combo PC Fix Seoul Center";
</script>
