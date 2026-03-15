<template>
    <div class="layout">
        <!-- Header -->
        <Header />

        <!-- Main content -->
        <main class="main-content">
            <slot />
        </main>

        <!-- Footer -->
        <Footer />
    </div>
</template>

<style scoped>
.main-content{
    background: var(--primary-color-200);
}
</style>

<script setup>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
</script>