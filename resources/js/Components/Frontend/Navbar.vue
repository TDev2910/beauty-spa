<script setup>
// Logic for Header/Navbar
</script>

<template>
    <header class="navbar-wrapper">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="/">
                    Seoul Center
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="nav-links">
                <a href="#dich-vu">Dịch Vụ</a>
                <a href="#ve-chung-toi">Về Chúng Tôi</a>
                <a href="#trai-nghiem">Trải Nghiệm Khách Hàng</a>
                <a href="#cam-ket">Cam Kết</a>
            </nav>

            <!-- Call to action -->
            <div class="nav-cta">
                <button class="btn btn-primary">Tư Vấn Ngay</button>
            </div>
        </div>
    </header>
</template>

<style scoped>
.navbar-wrapper {
    position: sticky;
    top: 0;
    z-index: 50;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
}

.nav-links a {
    margin: 0 15px;
    text-decoration: none;
    color: var(--text-color, #333);
}
</style>
