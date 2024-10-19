<template>
    <section class="relative">
        <Navbar />
        <div class="bg-blackGray py-40 mt-20">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-white">Content Marketing</h1>
                <p class="mt-4 text-white">
                    <span>Content Marketing</span> - <a href="/" class="text-secondary hover:underline">Home</a>
                </p>
            </div>
        </div>
        <div class="container px-16 md:px-20 mb-20">
            <div class="py-16 text-white">
                <p class="text-secondary font-semibold tracking-wider uppercase">Industries</p>
                <section class="w-full lg:w-1/2 mb-12">
                    <h1 class="mt-12 text-3xl lg:text-5xl font-bold leading-tight mb-6">
                        Content Marketing
                    </h1>
                    <p class="mt-4 text-sm md:text-base text-white">
                        At CrossDigital, we specialize in delivering content marketing solutions tailored to the unique
                        needs of businesses across different industries. Whether you're in fashion, technology, or
                        health, our custom strategies help boost your brand's visibility and drive engagement.
                    </p>
                </section>
                <!-- Industries Section -->
                <section class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Content Creation & Strategy -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('content-marketing')">
                                <PresentationChartLineIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Content Creation & Strategy</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Develop engaging and strategic content that resonates with your target audience, driving
                                traffic and conversions.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Tailored content strategies for multiple platforms.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>SEO-focused blog posts and articles.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Content calendars and editorial planning.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Social Media Management -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('content-marketing')">
                                <ChatBubbleLeftRightIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Social Media Management</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Create impactful social media content to engage your followers, grow your brand, and
                                boost conversions.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Platform-specific content strategies (Instagram, LinkedIn, etc.).</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Community management and audience engagement.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Data-driven social media campaigns.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Video Marketing -->
                        <div class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                            <a :href="route('content-marketing')">
                                <VideoCameraIcon class="h-8 w-8 text-secondary mb-3" />
                                <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Video
                                    Marketing</h5>
                            </a>
                            <p class="mb-3 text-white text-sm sm:text-base">
                                Leverage video content to increase engagement and deliver your brand message more
                                effectively to your audience.
                            </p>
                            <div class="flex flex-col">
                                <ul class="list-none space-y-4 mt-4 lg:mt-8">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Brand storytelling through video.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Product demo videos for better engagement.</span>
                                    </li>
                                </ul>
                                <ul class="list-none space-y-4 mt-2">
                                    <li class="flex items-center text-white">
                                        <CheckIcon class="h-5 w-5 text-secondary mr-2" />
                                        <span>Video editing and post-production services.</span>
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
import { CheckIcon, VideoCameraIcon, ChatBubbleLeftRightIcon, PresentationChartLineIcon } from '@heroicons/vue/24/outline';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import Partners from '@/Components/Partners.vue';
import Testimonials from '@/Components/Testimonials.vue';
import Blogs from '@/Components/Blogs.vue';
import ContactUs from '@/Components/ContactUs.vue'

// SEO Metadata
useHead({
    title: 'Content Marketing by Industry | Tailored Marketing Strategies',
    meta: [
        {
            name: 'description',
            content: 'Explore industry-specific content marketing solutions to elevate your brand’s voice. From fashion to technology, we offer tailored content strategies to engage your audience and grow your business.',
        },
        {
            name: 'keywords',
            content: 'content marketing, industry solutions, blog strategy, social media, technology marketing, health and wellness content',
        },
        {
            property: 'og:title',
            content: 'Content Marketing Solutions by Industry',
        },
        {
            property: 'og:description',
            content: 'Discover tailored content marketing strategies for industries like fashion, technology, health, and wellness.',
        },
        {
            property: 'og:image',
            content: '/path-to-your-image.jpg',
        },
        {
            property: 'og:url',
            content: 'https://crossdigital.com/content-marketing',
        },
        {
            name: 'twitter:card',
            content: 'summary_large_image',
        },
    ],
})
</script>