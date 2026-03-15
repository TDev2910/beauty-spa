<script setup>
import HeroBanner from "../Home/Partials/HeroBanner.vue"
import AboutUs from "../Home/Partials/AboutUs.vue";
import Guarantee from "../Home/Partials/Guarantee.vue";
import ServiceCategories from "../Home/Partials/ServiceCategories.vue";
import CustomerExperience from "../../../Components/Frontend/FloatingContact.vue";
import FloatingContact from "../Home/Partials/CustomerEx.vue";
import LuckyWheel from "@/Components/Frontend/LuckyWheel.vue";
const bannerUrl = "/img/banner-seoul-center.png";
const bannerAlt = "Chương trình tặng Combo PC Fix Seoul Center";
import CustomerExperience from "../Home/Partials/CustomerEx.vue";
import Testimonials from "../Home/Partials/Testimonials.vue";
import FloatingContact from "../../../Components/Frontend/FloatingContact.vue";
</script>

<template>
    <HeroBanner />
    <AboutUs />
    <Guarantee />
    <ServiceCategories />
    <CustomerExperience />
    <Testimonials />
    <FloatingContact />
    <LuckyWheel />
</template>
