<template>
    <section id="services">
        <div class="text-white">
            <!-- Header Section -->
            <div class="w-full lg:w-1/2">
                <p class="text-secondary font-semibold">Services</p>
                <h1 class="mt-4 text-3xl md:text-4xl lg:text-5xl font-medium leading-tight md:leading-[3rem]">
                    Our digital marketing services
                </h1>
                <p class="mt-4 text-white font-light text-sm md:text-base">
                    Our services are designed to elevate your business and reach your goals effectively. Explore our range of solutions tailored for your needs.
                </p>
            </div>

            <!-- Services Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 mt-8">
                <div class="p-6 bg-blackGray border border-neutral-500/60">
                    <a href="#">
                        <ComputerDesktopIcon class="h-8 w-8 text-white mb-3" />
                        <h5 class="text-lg mb-2 font-semibold tracking-tight text-white">Web Development</h5>
                    </a>
                    <p class="mb-3 text-white font-light">We specialize in creating responsive and engaging websites using WordPress, custom solutions, and E-Commerce platforms tailored to your business needs.</p>
                    <a href="#" class="inline-flex items-center text-sm font-medium text-secondary transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                        Learn More
                        <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
                    </a>
                </div>

                <div class="p-6 bg-blackGray border border-neutral-500/60">
                    <a href="#">
                        <DevicePhoneMobileIcon class="h-8 w-8 text-white mb-3" />
                        <h5 class="text-lg mb-2 font-semibold tracking-tight text-white">App Development</h5>
                    </a>
                    <p class="mb-3 text-white font-light">Our team develops hybrid, native, and web applications for all platforms, ensuring a seamless experience for users across devices.</p>
                    <a href="#" class="inline-flex items-center text-sm font-medium text-secondary transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                        Learn More
                        <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
                    </a>
                </div>

                <div class="p-6 bg-blackGray border border-neutral-500/60">
                    <a href="#">
                        <MegaphoneIcon class="h-8 w-8 text-white mb-3" />
                        <h5 class="text-lg mb-2 font-semibold tracking-tight text-white">Digital Marketing</h5>
                    </a>
                    <p class="mb-3 text-white font-light">Maximize your online presence with our digital marketing strategies, including SEO, Google Ads, and social media management, tailored for impactful results.</p>
                    <a href="#" class="inline-flex items-center text-sm font-medium text-secondary transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                        Learn More
                        <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
                    </a>
                </div>
                
                <div class="p-6 bg-blackGray border border-neutral-500/60">
                    <a href="#">
                        <PresentationChartBarIcon class="h-8 w-8 text-white mb-3" />
                        <h5 class="text-lg mb-2 font-semibold tracking-tight text-white">Branding & Graphic Design</h5>
                    </a>
                    <p class="mb-3 text-white font-light">Craft a compelling brand identity with our graphic design services, corporate ID solutions, and content creation that resonates with your audience.</p>
                    <a href="#" class="inline-flex items-center text-sm font-medium text-secondary transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
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
import { ComputerDesktopIcon, DevicePhoneMobileIcon, MegaphoneIcon, PresentationChartBarIcon } from '@heroicons/vue/24/outline'
import { ArrowRightIcon } from '@heroicons/vue/20/solid'

const appUrlDev = import.meta.env.VITE_APP_URL_DEV;

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
      content: `${appUrlDev}/images/services/featured-service-image.png`,
    },
    {
      property: 'og:url',
      content: `${appUrlDev}/#services`,
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
      content: `${appUrlDev}/images/services/featured-service-image.png`,
    },
  ],
});
</script>
