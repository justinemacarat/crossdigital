<template>
    <section class="relative">
        <Navbar />
        <div class="bg-blackGray py-40 mt-32">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-white">SEO Services</h1>
                <p class="mt-4 text-gray-400">
                    <span>SEO Services</span> - <a href="/" class="text-secondary hover:underline">Home</a>
                </p>
            </div>
        </div>
        <div class="container px-16 md:px-20 mb-20">
            <div class="py-16 text-white">
                <p class="text-secondary font-semibold tracking-wider uppercase">Services</p>
                <section class="w-full lg:w-1/2 mb-12">
                    <h1 class="mt-12 text-3xl lg:text-5xl font-bold leading-tight mb-6">
                        Professional SEO Services
                    </h1>
                    <p class="mt-4 text-sm md:text-base text-white">
                        At CrossDigital, our SEO services are designed to elevate your website's visibility on search engines, driving organic traffic and enhancing your online presence. We specialize in strategies that ensure your site ranks higher, attracts more visitors, and ultimately converts them into customers.
                    </p>
                </section>

                <!-- Services Section -->
                <section class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <!-- Search Engine Optimization -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('seo-services')">
                                <MagnifyingGlassIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Search Engine Optimization (SEO)</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Optimize your website to improve its ranking on search engine results pages and attract relevant organic traffic.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Comprehensive keyword research and competitor analysis.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Technical SEO audits and improvements.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>On-page SEO for optimized content and meta tags.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Off-page SEO with backlink strategies.</span>
                                    </li>
                                </ul>
                            </div>     
                        </div>

                        <!-- Local SEO -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl ">
                            <a :href="route('seo-services')">
                                <MapIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Local SEO</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Increase your visibility in local search results and attract customers near your business.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Google My Business optimization.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Local keyword targeting and landing page creation.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Local link building and citation management.</span>
                                    </li>
                                </ul>
                            </div> 
                        </div>

                        <!-- SEO Audits -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('seo-services')">
                                <ChartBarIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">SEO Audits & Consultation</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Uncover and resolve issues that are holding back your site’s search engine performance with detailed SEO audits.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Comprehensive website audits for SEO issues.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Tailored SEO recommendations and strategies.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Consultation on best practices and SEO improvements.</span>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('seo-services')">
                                <MagnifyingGlassCircleIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Advanced SEO Consultation</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Elevate your online presence with our expert SEO consultation, designed to identify gaps and enhance your digital strategy.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                         <span>Thorough analysis of current SEO performance and metrics.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Customized action plan to address SEO deficiencies.</span>
                                    </li>
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Regular follow-ups to track progress and adjust strategies.</span>
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
import { ChartBarIcon, CheckIcon, MagnifyingGlassCircleIcon, MapIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/outline';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import Partners from '@/Components/Partners.vue';
import Testimonials from '@/Components/Testimonials.vue';
import Blogs from '@/Components/Blogs.vue';

// SEO Metadata
useHead({
    title: 'Expert SEO Services | Boost Your Website Rankings',
    meta: [
        {
            name: 'description',
            content: 'Enhance your website’s visibility with professional SEO services. From keyword research to technical audits, we help your site rank higher and attract more traffic.',
        },
        {
            name: 'keywords',
            content: 'SEO services, search engine optimization, technical SEO, keyword research, on-page SEO, off-page SEO, local SEO, SEO audits',
        },
        {
            property: 'og:title',
            content: 'Expert SEO Services',
        },
        {
            property: 'og:description',
            content: 'Offering tailored SEO strategies to help your website rank higher in search results and attract more organic traffic.',
        },
        {
            property: 'og:image',
            content: '/path-to-your-image.jpg',
        },
        {
            property: 'og:url',
            content: 'https://crossdigital.com/seo-services',
        },
        {
            name: 'twitter:card',
            content: 'summary_large_image',
        },
    ],
})
</script>