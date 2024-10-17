<template>
    <section class="relative">
        <Navbar />
        <div class="bg-blackGray py-40 mt-20">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-white">App Development</h1>
                <p class="mt-4 text-white">
                    <span>App Development</span> - <a href="/" class="text-secondary hover:underline">Home</a>
                </p>
            </div>
        </div>
        <div class="container px-16 md:px-20 mb-20">
            <div class="py-16 text-white">
                <p class="text-secondary font-semibold tracking-wider uppercase">Services</p>
                <section class="w-full lg:w-1/2 mb-12">
                    <h1 class="mt-12 text-3xl lg:text-5xl font-bold leading-tight mb-6">
                        App Development Services
                    </h1>
                    <p class="mt-4 text-sm md:text-base text-white">
                        At CrossDigital, we specialize in creating custom mobile and web apps that not only look great but also perform exceptionally well. Our team of app developers is committed to delivering solutions that cater to your business's unique needs, whether you're looking to enhance your mobile presence, build a cross-platform app, or optimize for app store rankings.
                    </p>
                </section>

                <!-- Services Section -->
                <section class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('app-development')">
                                <DevicePhoneMobileIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Custom App Design</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Tailored app designs to showcase your brand identity and ensure your app stands out from the competition.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Fully integrated feature management.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Secure user authentication.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Responsive design for a seamless user experience.</span>
                                    </li>
                                </ul>
                            </div>     
                        </div>
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('app-development')">
                                <PhoneIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Cross-Platform Solutions</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Fully integrated cross-platform apps, built to handle everything from feature implementation to secure user interactions.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Feature-rich app management.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Secure user authentication.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Optimized for performance and scalability.</span>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('app-development')">
                                <DeviceTabletIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Mobile-First Design</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Mobile-friendly apps that ensure a seamless user experience across all devices.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Optimized for mobile responsiveness.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Secure data handling.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Designed for high performance and reliability.</span>
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
import { CheckIcon, DevicePhoneMobileIcon, PhoneIcon, DeviceTabletIcon } from '@heroicons/vue/24/outline';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import Partners from '@/Components/Partners.vue';
import Testimonials from '@/Components/Testimonials.vue';
import Blogs from '@/Components/Blogs.vue';
import ContactUs from '@/Components/ContactUs.vue'

// SEO Metadata
useHead({
    title: 'Professional App Development Services | Build Your Mobile and Web Apps',
    meta: [
        {
            name: 'description',
            content: 'Get professional app development services tailored to your business needs. From custom designs to cross-platform solutions, we create apps that drive results.',
        },
        {
            name: 'keywords',
            content: 'app development, mobile apps, cross-platform apps, custom app development, responsive app design, app store optimization',
        },
        {
            property: 'og:title',
            content: 'Professional App Development Services',
        },
        {
            property: 'og:description',
            content: 'Offering expert app development services that help businesses establish a strong mobile presence.',
        },
        {
            property: 'og:image',
            content: '/path-to-your-image.jpg',
        },
        {
            property: 'og:url',
            content: 'https://crossdigital.com/app-development',
        },
        {
            name: 'twitter:card',
            content: 'summary_large_image',
        },
    ],
})
</script>