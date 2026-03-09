<template>
    <div class="layout">
        <!-- Header -->
        <Header />

        <!-- Main content -->
        <main>
            <slot />
        </main>

        <!-- Footer -->
        <Footer />
    </div>
</template>

<script setup>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
</script>