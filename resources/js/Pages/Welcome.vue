<template>
    <div class="min-h-screen bg-slate-50 dark:bg-slate-900 flex justify-center items-center">
        <div class="card bg-white dark:bg-slate-800 p-8 rounded-xl shadow-lg flex flex-col items-center">
            <h1 class="text-3xl font-semibold mb-6 text-slate-900 dark:text-white">
                Seoul Center <span class="text-emerald-500 font-bold">Inertia</span> + <span class="text-emerald-400 font-bold">Vue</span> + <span class="text-blue-500 font-bold">PrimeVue</span>
            </h1>
            
            <p class="mb-4 text-slate-600 dark:text-slate-300">
                Dự án đã được cấu hình thành công!
            </p>

            <div class="flex gap-4">
                <Button label="Khám Phá" icon="pi pi-compass" />
                <Button label="Tài Liệu" icon="pi pi-book" severity="secondary" outlined />
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Button from 'primevue/button';
</script>
