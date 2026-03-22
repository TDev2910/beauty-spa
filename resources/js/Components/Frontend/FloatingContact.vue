<template>
    <div class="fab-wrapper">
        <TransitionGroup name="speed-dial">
            <div v-if="isOpen" class="fab-options">
                <a href="tel:0914269346" class="fab-item phone">
                    <span class="tooltip">Gọi điện</span>
                    <i class="pi pi-phone"></i>
                </a>
                <a href="https://zalo.me/..." target="_blank" class="fab-item zalo">
                    <span class="tooltip">Zalo</span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" alt="Zalo" />
                </a>
                <a href="#" class="fab-item messenger">
                    <span class="tooltip">Facebook</span>
                    <i class="pi pi-facebook"></i>
                </a>
            </div>
        </TransitionGroup>

        <button @click="isOpen = !isOpen" :class="['fab-main', { 'is-active': isOpen }]">
            <i :class="isOpen ? 'pi pi-times' : 'pi pi-comment'"></i>
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const isOpen = ref(false);
</script>

<style scoped>
.fab-wrapper {
    position: fixed;
    bottom: 30px;
    right: 30px;
    display: flex;
    flex-direction: column-reverse;
    align-items: center;
    gap: 15px;
    z-index: 9999;
}

/* Nút chính */
.fab-main {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #D76C82;
    /* Màu đỏ thương hiệu của bạn */
    color: white;
    border: none;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    font-size: 24px;
    transition: transform 0.3s ease;
    animation: pulse-glow 2s infinite;
}

.fab-main.is-active {
    transform: rotate(90deg);
    background-color: #333;
    animation: none;
    /* Dừng nháy khi đang mở menu */
}

/* Các mục con */
.fab-options {
    display: flex;
    flex-direction: column-reverse;
    gap: 12px;
    align-items: center;
}

.fab-item {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
    text-decoration: none;
    position: relative;
    transition: transform 0.2s;
}

.fab-item i {
    font-size: 20px;
}

.fab-item img {
    width: 25px;
    height: 25px;
}

.fab-item.phone {
    color: #4CAF50;
}

.fab-item.messenger {
    color: #0084FF;
}

.fab-item:hover {
    transform: scale(1.1);
}

/* Tooltip hiện tên khi hover */
.tooltip {
    position: absolute;
    right: 60px;
    background: #333;
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 12px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
}

.fab-item:hover .tooltip {
    opacity: 1;
    visibility: visible;
}

/* Animation cho danh sách con */
.speed-dial-enter-active,
.speed-dial-leave-active {
    transition: all 0.3s ease;
}

.speed-dial-enter-from,
.speed-dial-leave-to {
    opacity: 0;
    transform: translateY(20px) scale(0.5);
}

/* ĐẨY NÚT LÊN CAO TRÊN MOBILE */
@media (max-width: 48em) {
    .fab-wrapper {
        bottom: 100px;
        right: 15px;
    }

    .fab-main {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
}

/* Hiệu ứng nháy nháy (Pulse & Glow) */
@keyframes pulse-glow {
    0% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(162, 29, 68, 0.7);
    }

    70% {
        transform: scale(1.05);
        box-shadow: 0 0 0 15px rgba(162, 29, 68, 0);
    }

    100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(162, 29, 68, 0);
    }
}
</style>