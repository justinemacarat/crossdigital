<template>
    <div class="container px-16 md:px-20 mb-20 h-dvh">
        <Navbar/>
        <div class="absolute top-20 bottom-0 inset-x-0 overflow-hidden">
            <video class="w-full h-full object-cover opacity-70" autoplay loop muted>
                <source src="/videos/tech2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="flex justify-center items-center h-full z-10">
            <Banner />
        </div>
        <!-- Image Section -->
    </div>
    <div class="container px-16 md:px-20 mb-20">
        <Services/>
        <AboutUs/>
        <Partners/>
        <Industries/>
        <Testimonials/>
        <Blogs />
        <ContactUs/>
    </div>
    <Footer />
</template>

<script setup>
    import Navbar from '@/Components/Navbar.vue';
    import Banner from '@/Components/Banner.vue';
    import Services from '@/Components/Services.vue';
    import AboutUs from '@/Components/AboutUs.vue';
    import Partners from '@/Components/Partners.vue';
    import Industries from '@/Components/Industries.vue';
    import Testimonials from '@/Components/Testimonials.vue';
    import Blogs from '@/Components/Blogs.vue';
    import ContactUs from '@/Components/ContactUs.vue';
    import Footer from '@/Components/Footer.vue';
</script> 