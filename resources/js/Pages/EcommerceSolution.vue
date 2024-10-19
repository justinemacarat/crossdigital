<template>
    <section class="relative">
        <Navbar />
        <div class="bg-blackGray py-40 mt-20">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-white">E-Commerce Solutions</h1>
                <p class="mt-4 text-white">
                    <span>E-Commerce Solutions</span> - <a href="/" class="text-secondary hover:underline">Home</a>
                </p>
            </div>
        </div>
        <div class="container px-16 md:px-20 mb-20">
            <div class="py-16 text-white">
                <p class="text-secondary font-semibold tracking-wider uppercase">Industries</p>
                <section class="w-full lg:w-1/2 mb-12">
                    <h1 class="mt-12 text-3xl lg:text-5xl font-bold leading-tight mb-6">
                        E-Commerce Solutions
                    </h1>
                    <p class="mt-4 text-sm md:text-base text-white">
                        At CrossDigital, we deliver industry-specific e-commerce solutions to help businesses across different sectors thrive online. Whether you're in fashion, technology, or any other sector, our tailored solutions will help you grow your online presence and increase sales.
                    </p>
                </section>

                <!-- Industries Section -->
                <section class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('ecommerce-solution')">
                                <BuildingStorefrontIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Fashion & Apparel</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Create a visually stunning and fully functional online store that captures your brand and drives customer engagement in the fashion and apparel industry.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Custom product catalog and filtering options.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Inventory tracking and real-time updates.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Mobile-first responsive design.</span>
                                    </li>
                                </ul>
                            </div>     
                        </div>
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('ecommerce-solution')">
                                <DeviceTabletIcon  class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Technology & Electronics</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Robust and scalable e-commerce solutions for technology and electronics businesses, helping you manage a wide array of products and enhance the customer experience.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Advanced product filtering and comparison.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Secure payment gateways and encryption.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Integrated product reviews and ratings.</span>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('ecommerce-solution')">
                                <HeartIcon   class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Health & Wellness</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                E-commerce platforms tailored to health and wellness brands, ensuring secure product listings, customer data protection, and seamless user experiences.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Subscription services for recurring orders.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>HIPAA-compliant secure payments.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Personalized product recommendations.</span>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </section>
                <Testimonials />
                <Partners />
                <Blogs />
                <ContactUs />
            </div>
        </div>
        <Footer />
    </section>
</template>

<script setup>
import { useHead } from '@vueuse/head';
import { CheckIcon, BuildingStorefrontIcon, DeviceTabletIcon, HeartIcon  } from '@heroicons/vue/24/outline';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import Partners from '@/Components/Partners.vue';
import Testimonials from '@/Components/Testimonials.vue';
import Blogs from '@/Components/Blogs.vue';
import ContactUs from '@/Components/ContactUs.vue'

// SEO Metadata
useHead({
    title: 'E-Commerce Solutions by Industry | Tailored Online Store Solutions',
    meta: [
        {
            name: 'description',
            content: 'Explore industry-specific e-commerce solutions to enhance your online business. From fashion to electronics, we offer custom e-commerce platforms to grow your business.',
        },
        {
            name: 'keywords',
            content: 'e-commerce, industry solutions, online store, fashion e-commerce, electronics e-commerce, health and wellness online stores',
        },
        {
            property: 'og:title',
            content: 'E-Commerce Solutions by Industry',
        },
        {
            property: 'og:description',
            content: 'Discover tailored e-commerce solutions for various industries, including fashion, electronics, health, and wellness.',
        },
        {
            property: 'og:image',
            content: '/path-to-your-image.jpg',
        },
        {
            property: 'og:url',
            content: 'https://crossdigital.com/ecommerce-solutions',
        },
        {
            name: 'twitter:card',
            content: 'summary_large_image',
        },
    ],
})
</script>