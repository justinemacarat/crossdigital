<template>
    <section class="relative">
        <Navbar />
        <div class="bg-blackGray py-40 mt-20">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-white">Branding & Graphic Design</h1>
                <p class="mt-4 text-gray-400">
                    <span>Branding & Graphic Design</span> - <a href="/" class="text-secondary hover:underline">Home</a>
                </p>
            </div>
        </div>
        <div class="container px-16 md:px-20 mb-20">
            <div class="py-16 text-white">
                <p class="text-secondary font-semibold tracking-wider uppercase">Services</p>
                <section class="w-full lg:w-1/2 mb-12">
                    <h1 class="mt-12 text-3xl lg:text-5xl font-bold leading-tight mb-6">
                        Branding & Graphic Design Services
                    </h1>
                    <p class="mt-4 text-sm md:text-base text-white">
                        At CrossDigital, we specialize in creating visually compelling and memorable brand experiences.
                        Whether you're looking for a new logo, a complete brand overhaul, or eye-catching graphics for
                        your marketing campaigns, we have the expertise to help your brand shine.
                    </p>
                </section>

                <!-- Services Section -->
                <section class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Logo & Brand Identity Design -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('branding-design')">
                                <PresentationChartLineIcon  class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Logo &
                                    Brand Identity Design</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Create a powerful and cohesive brand identity that represents your company's values and
                                vision.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Custom logo design that captures your brand's essence.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Comprehensive brand style guides.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Consistent brand identity across all platforms.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Graphic Design for Marketing -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                             <a :href="route('branding-design')">
                                <SparklesIcon  class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Graphic
                                    Design for Marketing</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Stand out with creative and high-quality marketing materials designed to engage your
                                audience.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Flyers, brochures, posters, and more.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Custom digital and print marketing assets.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Eye-catching social media graphics.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Packaging Design -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                             <a :href="route('branding-design')">
                                <ArchiveBoxIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Packaging
                                    Design</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                We design attractive packaging that speaks to your brand and captures consumer
                                attention.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Custom packaging design to enhance product appeal.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Packaging solutions tailored to your brand and product.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Functional and sustainable design options available.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <Testimonials />
                <Partners />
                <Blogs />
            </div>
        </div>
        <Footer />
    </section>
</template>

<script setup>
import { useHead } from '@vueuse/head';
import { CheckIcon, SparklesIcon , PresentationChartLineIcon , ArchiveBoxIcon  } from '@heroicons/vue/24/outline';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import Partners from '@/Components/Partners.vue';
import Testimonials from '@/Components/Testimonials.vue';
import Blogs from '@/Components/Blogs.vue';

// SEO Metadata
useHead({
    title: 'Expert Branding & Graphic Design Services | Build a Strong Identity',
    meta: [
        {
            name: 'description',
            content: 'Transform your brand with professional branding and graphic design services. We help create compelling visuals that resonate with your audience.',
        },
        {
            name: 'keywords',
            content: 'branding, graphic design, logo design, brand identity, marketing materials, visual communication',
        },
        {
            property: 'og:title',
            content: 'Expert Branding & Graphic Design Services',
        },
        {
            property: 'og:description',
            content: 'We offer customized branding and graphic design solutions to help your business stand out and communicate effectively.',
        },
        {
            property: 'og:image',
            content: '/path-to-your-image.jpg',
        },
        {
            property: 'og:url',
            content: 'https://crossdigital.com/branding-design',
        },
        {
            name: 'twitter:card',
            content: 'summary_large_image',
        },
    ],
})
</script>