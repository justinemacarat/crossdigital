<template>
  <section id="services" class="relative">
    <div class="text-white">
      <!-- Header Section -->
      <div class="w-full lg:w-1/2 mb-12">
        <p class="text-secondary font-semibold tracking-wider uppercase">Services</p>
        <h1 class="mt-4 text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
          Our Digital Marketing Services
        </h1>
        <p class="mt-4 text-white font-light text-sm md:text-base">
          Our services are designed to elevate your business and reach your goals effectively. Explore our range of
          solutions tailored for your needs.
        </p>
      </div>

      <!-- Services Section -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
           <a :href="route('web-development')">
            <ComputerDesktopIcon class="h-8 w-8 text-secondary mb-3" />
            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Web Development</h5>
          </a>
          <p class="mb-3 text-white text-sm sm:text-base">
            We specialize in creating responsive and engaging websites using WordPress, custom solutions, and E-Commerce platforms tailored to your business needs.
          </p>
          <a :href="route('web-development')"
            class="inline-flex items-center text-sm font-medium text-secondary transition-transform transform hover:translate-x-1">
            Learn More
            <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
          </a>
        </div>

        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
          <a :href="route('app-development')">
            <DevicePhoneMobileIcon class="h-8 w-8 text-secondary mb-3" />
            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">App Development</h5>
          </a>
          <p class="mb-3 text-white text-sm sm:text-base">
            Our team develops hybrid, native, and web applications for all platforms, ensuring a seamless experience for users across devices.
          </p>
          <a :href="route('app-development')" class="inline-flex items-center text-sm font-medium text-secondary transition-transform transform hover:translate-x-1">
            Learn More
            <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
          </a>
        </div>

        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
          <a :href="route('digital-marketing')">
            <MegaphoneIcon class="h-8 w-8 text-secondary mb-3" />
            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Digital Marketing</h5>
          </a>
          <p class="mb-3 text-white text-sm sm:text-base">
            Maximize your online presence with our digital marketing strategies, including SEO, Google Ads, and social media management, tailored for impactful results.
          </p>
          <a :href="route('digital-marketing')" class="inline-flex items-center text-sm font-medium text-secondary transition-transform transform hover:translate-x-1">
            Learn More
            <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
          </a>
        </div>

        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
          <a :href="route('branding-design')">
            <PresentationChartBarIcon class="h-8 w-8 text-secondary mb-3" />
            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Branding & Graphic Design</h5>
          </a>
          <p class="mb-3 text-white font-light">
            Craft a compelling brand identity with our graphic design services, corporate ID solutions, and content creation that resonates with your audience.
          </p>
          <a :href="route('branding-design')" class="inline-flex items-center text-sm font-medium text-secondary transition-transform transform hover:translate-x-1">
            Learn More
            <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { useHead } from '@vueuse/head';
import { ComputerDesktopIcon, DevicePhoneMobileIcon, MegaphoneIcon, PresentationChartBarIcon } from '@heroicons/vue/24/outline';
import { ArrowRightIcon } from '@heroicons/vue/20/solid';

const appUrl = import.meta.env.VITE_APP_URL;

// SEO Metadata
useHead({
  title: 'Digital Marketing Services | Elevate Your Business with Cross Digital',
  meta: [
    {
      name: 'description',
      content: 'Discover Cross Digital\'s range of digital marketing services, including web development, app development, SEO, and branding, tailored to elevate your business and achieve your goals effectively.',
    },
    {
      property: 'og:title',
      content: 'Digital Marketing Services - Cross Digital',
    },
    {
      property: 'og:description',
      content: 'Explore our comprehensive digital marketing services at Cross Digital, including web and app development, digital marketing strategies, and branding solutions designed to enhance your online presence.',
    },
    {
      property: 'og:image',
      content: `${appUrl}/images/services/featured-service-image.png`,
    },
    {
      property: 'og:url',
      content: `${appUrl}/#services`,
    },
    {
      name: 'twitter:card',
      content: 'summary_large_image',
    },
    {
      name: 'twitter:title',
      content: 'Digital Marketing Services - Cross Digital',
    },
    {
      name: 'twitter:description',
      content: 'Learn about our tailored digital marketing services at Cross Digital, including web and app development, SEO strategies, and branding solutions.',
    },
    {
      name: 'twitter:image',
      content: `${appUrl}/images/services/featured-service-image.png`,
    },
  ],
});
</script>

<style scoped>
.bg-blackGray {
  background-color: #1a1a1a;
}
</style>
