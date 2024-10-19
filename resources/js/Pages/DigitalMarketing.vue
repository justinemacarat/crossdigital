<template>
    <section class="relative">
        <Navbar />
        <div class="bg-blackGray py-40 mt-20">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-white">Digital Marketing</h1>
                <p class="mt-4 text-gray-400">
                    <span>Digital Marketing</span> - <a href="/" class="text-secondary hover:underline">Home</a>
                </p>
            </div>
        </div>
        <div class="container px-16 md:px-20 mb-20">
            <div class="py-16 text-white">
                <p class="text-secondary font-semibold tracking-wider uppercase">Services</p>
                <section class="w-full lg:w-1/2 mb-12">
                    <h1 class="mt-12 text-3xl lg:text-5xl font-bold leading-tight mb-6">
                        Digital Marketing Services
                    </h1>
                    <p class="mt-4 text-sm md:text-base text-white">
                        At CrossDigital, we offer comprehensive digital marketing solutions tailored to elevate your online presence and deliver measurable results. From increasing brand awareness to optimizing SEO and launching highly-targeted ad campaigns, we provide end-to-end services designed to drive traffic, enhance customer engagement, and increase conversions. Our team of experienced professionals uses data-driven strategies and the latest tools to ensure your business achieves sustainable growth and stands out in a competitive market. No matter the size of your business, we are committed to helping you reach your goals and maximize your ROI.
                    </p>
                </section>

                <!-- Services Section -->
                <section class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div v-for="(service, index) in displayedServices" :key="index" class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('digital-marketing')">
                                <component :is="service.icon" class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">{{ service.title }}</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">{{ service.description }}</p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li v-for="(feature, fIndex) in service.features" :key="fIndex" class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>{{ feature }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Show More Button -->
                    <div class="text-center mt-8">
                        <button @click="toggleServices" class="uppercase text-white border-2 border-secondary font-semibold text-sm sm:text-md px-6 py-2 sm:px-8 sm:py-3 rounded-md transition-colors hover:bg-secondary hover:text-black">>
                            {{ showAll ? 'Show Less' : 'Show More' }}
                        </button>
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
import { ref, computed } from 'vue';
import { useHead } from '@vueuse/head';
import { HashtagIcon, CheckIcon, MagnifyingGlassIcon, CurrencyDollarIcon, DocumentTextIcon, EnvelopeIcon, ChartBarIcon } from '@heroicons/vue/24/outline';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import Partners from '@/Components/Partners.vue';
import Testimonials from '@/Components/Testimonials.vue';
import Blogs from '@/Components/Blogs.vue';

// SEO Metadata
useHead({
    title: 'Expert Digital Marketing Services | Boost Your Online Presence',
    meta: [
        {
            name: 'description',
            content: 'Elevate your brand with expert digital marketing services. From SEO to social media marketing, we help businesses thrive online.',
        },
        {
            name: 'keywords',
            content: 'digital marketing, SEO, social media marketing, PPC advertising, online marketing, brand awareness, search engine optimization',
        },
        {
            property: 'og:title',
            content: 'Expert Digital Marketing Services',
        },
        {
            property: 'og:description',
            content: 'Offering tailored digital marketing services to help businesses increase their online visibility and drive growth.',
        },
        {
            property: 'og:image',
            content: '/path-to-your-image.jpg',
        },
        {
            property: 'og:url',
            content: 'https://crossdigital.com/digital-marketing',
        },
        {
            name: 'twitter:card',
            content: 'summary_large_image',
        },
    ],
});

// Reactive state for services
const showAll = ref(false);

// Service data
const digtalservices = [
    {
        title: 'Search Engine Optimization (SEO)',
        description: 'Optimize your website to rank higher on search engine results pages and attract more organic traffic.',
        features: [
            'Comprehensive keyword research and implementation.',
            'On-page and off-page optimization strategies.',
            'Regular performance tracking and reporting.'
        ],
        icon: MagnifyingGlassIcon
    },
    {
        title: 'Social Media Marketing',
        description: 'Create impactful social media campaigns that engage your audience and enhance your brand\'s visibility.',
        features: [
            'Tailored content for each social platform.',
            'Social media advertising and targeting.',
            'Analytics and performance tracking.'
        ],
        icon: HashtagIcon
    },
    {
        title: 'Pay-Per-Click (PPC) Advertising',
        description: 'Drive targeted traffic to your website with paid search and display advertising campaigns.',
        features: [
            'Strategic keyword bidding and optimization.',
            'Targeted ad placements on search engines and social media.',
            'Detailed performance analysis and reporting.'
        ],
        icon: CurrencyDollarIcon
    },
    {
        title: 'Content Marketing',
        description: 'Engage your audience with compelling content that drives conversions and builds brand authority.',
        features: [
            'Blog writing and content creation.',
            'Content strategy and planning.',
            'Content distribution and promotion.'
        ],
        icon: DocumentTextIcon
    },
    {
        title: 'Email Marketing',
        description: 'Create targeted email campaigns that engage customers and drive conversions.',
        features: [
            'Personalized email campaigns.',
            'Email list management and segmentation.',
            'Automated email workflows.'
        ],
        icon: EnvelopeIcon
    },
    {
        title: 'Conversion Rate Optimization (CRO)',
        description: 'Maximize the potential of your website by improving your conversion rates and driving more sales.',
        features: [
            'Conversion funnel analysis.',
            'A/B testing and optimization.',
            'User behavior tracking.'
        ],
        icon: ChartBarIcon
    }
];

// Computed property to determine which services to display
const displayedServices = computed(() => {
    return showAll.value ? digtalservices : digtalservices.slice(0, 3);
});

// Method to toggle services
const toggleServices = () => {
    showAll.value = !showAll.value;
};
</script>