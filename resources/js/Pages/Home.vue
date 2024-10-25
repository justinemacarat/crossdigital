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
    <button v-show="showScroll" @click="scrollToTop" class="fixed bottom-10 right-10 bg-secondary text-primary p-3 rounded-md shadow-lg">
        <ChevronUpIcon class="size-6" />
    </button>
    <Footer />
</template>

<script setup>
  import { ref, onMounted, onBeforeUnmount, watchEffect } from 'vue';
  import { ChevronUpIcon } from '@heroicons/vue/20/solid';
  import { useHead } from '@vueuse/head';

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
  
  const appUrl = window.appConfig.appUrl;

  const visibleSection = ref('homeBanner', 'services', 'industries', 'testimonials', 'blogs', 'aboutUs', 'contactUs');
  const sections = ['homeBanner', 'services', 'industries', 'testimonials', 'blogs', 'aboutUs', 'contactUs'];
  const metadata = {
    homeBanner: {
      description:
        'Elevate your brand with Cross Digital\'s innovative digital marketing solutions. From SEO to social media, we serve industries with tailored strategies.',
      image: `${appUrl}/images/cross-digital-full-white.png`,
      twitterCard: 'summary_large_image',
      twitterTitle: 'Cross Digital | Innovative Digital Marketing Solutions',
      twitterDescription:
        'Join Cross Digital and unlock your brand\'s full potential with our digital marketing expertise. Tailored solutions across SEO, content marketing, and more.',
      twitterImage: `${appUrl}/images/cross-digital-full-white.png`,
    },
    services: {
      description:
        'Discover Cross Digital\'s range of digital marketing services, including web development, app development, SEO, and branding, tailored to elevate your business and achieve your goals effectively.',
    },
  };

  // Update the page metadata dynamically
  watchEffect(() => {
    const currentMeta = metadata[visibleSection.value];
    useHead({
      title: 'Cross Digital | Innovative Digital Marketing Solutions',
      meta: [
        { name: 'description', content: currentMeta.description },
        { property: 'og:title', content: currentMeta.title },
        { property: 'og:description', content: currentMeta.description },
        { property: 'og:image', content: currentMeta.image },
        { property: 'og:url', content: `${window.appConfig.appUrl}/#${visibleSection.value}` },
        { name: 'twitter:card', content: currentMeta.twitterCard },
        { name: 'twitter:title', content: currentMeta.twitterTitle },
        { name: 'twitter:description', content: currentMeta.twitterDescription },
        { name: 'twitter:image', content: currentMeta.twitterImage },
      ],
    });
  });

  // Monitor which section is visible using Intersection Observer
  const handleIntersect = (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        visibleSection.value = entry.target.id;
      }
    });
  };

  onMounted(() => {
    const observer = new IntersectionObserver(handleIntersect, { threshold: 0.5 });
    sections.forEach((id) => {
      const element = document.getElementById(id);
      if (element) observer.observe(element);
    });
  });

  onBeforeUnmount(() => {
    // Ensure cleanup of the observer to prevent memory leaks
    sections.forEach((id) => {
      const element = document.getElementById(id);
      if (element) observer.unobserve(element);
    });
  });


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