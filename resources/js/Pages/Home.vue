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
    <button v-show="showScroll" @click="scrollToTop" class="fixed bottom-10 right-10 bg-secondary text-white p-3 rounded-md shadow-lg">
        <ChevronUpIcon class="size-6" />
    </button>
    <Footer />
</template>

<script setup>
    import { ref, onMounted, onBeforeUnmount } from 'vue';
    import { ChevronUpIcon } from '@heroicons/vue/20/solid';
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

    const showScroll = ref(false);

  // Function to scroll to top smoothly
    const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

    const handleScroll = () => {
    const scrollPosition = window.pageYOffset;
    showScroll.value = scrollPosition > 300;
}; 
onMounted(() => {
    window.addEventListener('scroll', handleScroll);
  });

onBeforeUnmount(() => {
    window.removeEventListener('scroll', handleScroll);
  });   
</script> 

<style scoped>
  button.fixed {
    z-index: 100;
  }
</style>