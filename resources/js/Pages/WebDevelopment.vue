<template>
    <section class="relative">
    <Navbar />
    <div class="bg-blackGray py-40 mt-20">
    <div class="container mx-auto text-center  px-4">
      <h1 class="text-4xl font-bold text-white ">Website Development</h1>
      <p class="mt-4 text-gray-400">
        <span>Website Development</span> - <a href="/" class="text-secondary hover:underline">Home</a>
      </p>
    </div>
  </div>
    <div class="container px-16 md:px-20 mb-20">
         <div class="py-16 text-white">
            <p class="text-secondary font-semibold tracking-wider uppercase">Services</p>
            <section class="w-full lg:w-1/2 mb-12">
                <h1 class="mt-12 text-3xl lg:text-5xl font-bold leading-tight mb-6">
                    Website Development Services
                </h1>
                <p class="mt-4 text-sm md:text-base text-white">
                    At CrossDigital, we specialize in creating custom websites that not only look great but also perform exceptionally well. Our team of web developers is committed to delivering solutions that cater to your business's unique needs, whether you're looking to enhance your online presence, set up an e-commerce platform, or optimize your site for SEO.
                </p>
            </section>

            <!-- Services Section -->
            <section class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <CodeBracketIcon class="h-8 w-8 text-secondary mb-3" />
                            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Custom Web
                                Design</h5>
                        <p class="mb-3 text-white text-sm sm:text-base">
                            Tailored designs to showcase your brand identity and ensure your website stands out
                            from the competition.
                        </p>
                        <div class="flex flex-col">
                            <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Fully integrated product management.</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Secure payment gateways.</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Responsive design for a seamless shopping experience.</span>
                                </li>
                            </ul>
                        </div>     
                    </div>
                    <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <ShoppingBagIcon class="h-8 w-8 text-secondary mb-3" />
                            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">E-Commerce
                                Solutions</h5>
                        <p class="mb-3 text-white text-sm sm:text-base">
                            Fully integrated e-commerce platforms, built to handle everything from product listings
                            to secure checkout.
                        </p>
                        <div class="flex flex-col">
                            <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                   <span>Easy-to-manage product inventory and categories.</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Customizable shipping options and tax calculations.</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <<span>Seamless integration with multiple payment gateways.</span>
                                </li>
                            </ul>
                        </div> 
                    </div>
                    <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <ComputerDesktopIcon class="h-8 w-8 text-secondary mb-3" />
                            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Responsive Web
                                Design</h5>
                        <p class="mb-3 text-white text-sm sm:text-base">
                            Mobile-friendly websites that ensure a seamless user experience across all devices.
                        </p>
                        <div class="flex flex-col">
                            <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Fluid grid layouts that adapt to any screen size.</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                    <span>Mobile-first design approach for fast-loading pages.</span>
                                </li>
                            </ul>
                            <ul class="list-none space-y-4 mt-2">
                                <li class="flex items-center text-white">
                                    <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                     <span>Optimized for touch interactions and gestures.</span>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </section>
            <Testimonials/>
            <Partners />
            <Blogs />
        </div>
    </div>
    <Footer />

    </section>
</template>

<script setup>
import { useHead } from '@vueuse/head';
import { ComputerDesktopIcon, CodeBracketIcon, CheckIcon, ShoppingBagIcon } from '@heroicons/vue/24/outline';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import Partners from '@/Components/Partners.vue';
import Testimonials from '@/Components/Testimonials.vue';
import Blogs from '@/Components/Blogs.vue';

// SEO Metadata
useHead({
    title: 'Professional Website Development Services | Build Your Online Presence',
    meta: [
        {
            name: 'description',
            content: 'Get professional website development services tailored to your business needs. From custom designs to e-commerce solutions, we create websites that drive results.',
        },
        {
            name: 'keywords',
            content: 'website development, web development services, custom websites, e-commerce solutions, responsive web design, SEO optimized websites',
        },
        {
            property: 'og:title',
            content: 'Professional Website Development Services',
        },
        {
            property: 'og:description',
            content: 'Offering expert web development services that help businesses establish a strong online presence.',
        },
        {
            property: 'og:image',
            content: '/path-to-your-image.jpg',
        },
        {
            property: 'og:url',
            content: 'https://crossdigital.com/web-development',
        },
        {
            name: 'twitter:card',
            content: 'summary_large_image',
        },
    ],
})

</script>

