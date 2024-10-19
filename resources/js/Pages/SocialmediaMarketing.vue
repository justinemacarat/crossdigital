<template>
    <section class="relative">
        <Navbar />
        <div class="bg-blackGray py-40 mt-20">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-white">Social Media Marketing</h1>
                <p class="mt-4 text-white">
                    <span>Social Media Marketing</span> - <a href="/" class="text-secondary hover:underline">Home</a>
                </p>
            </div>
        </div>
        <div class="container px-16 md:px-20 mb-20">
            <div class="py-16 text-white">
                <p class="text-secondary font-semibold tracking-wider uppercase">Industries</p>

                <!-- Main Layout: Content on the Left, Image on the Right -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-12">
                    <div>
                        <!-- Title Section -->
                        <section class="mb-12">
                            <h1 class="text-3xl lg:text-5xl font-bold leading-tight mb-6">
                                Social Media Marketing
                            </h1>
                            <p class="text-sm md:text-base text-white">
                                At CrossDigital, we provide specialized social media marketing solutions tailored to
                                various industries. Whether you're in fashion, technology, or health, we help your brand
                                engage effectively with its audience across different platforms.
                            </p>
                        </section>

                        <!-- 4 Boxes Section -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Social Media Strategy -->
                            <div
                                class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                                <a :href="route('social-media-marketing')">
                                    <PresentationChartLineIcon class="h-8 w-8 text-secondary mb-3" />
                                    <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Social
                                        Media Strategy</h5>
                                </a>
                                <p class="mb-3 text-white text-sm sm:text-base">
                                    Build a powerful social media presence with tailored strategies for every platform,
                                    ensuring consistent engagement and audience growth.
                                </p>
                            </div>

                            <!-- Community Management -->
                            <div
                                class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                                <a :href="route('social-media-marketing')">
                                    <ChatBubbleLeftRightIcon class="h-8 w-8 text-secondary mb-3" />
                                    <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">
                                        Community Management</h5>
                                </a>
                                <p class="mb-3 text-white text-sm sm:text-base">
                                    Foster a loyal community by engaging with your audience through active communication
                                    and personalized responses on social media.
                                </p>
                            </div>

                            <!-- Influencer Marketing -->
                            <div
                                class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                                <a :href="route('social-media-marketing')">
                                    <VideoCameraIcon class="h-8 w-8 text-secondary mb-3" />
                                    <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">
                                        Influencer Marketing</h5>
                                </a>
                                <p class="mb-3 text-white text-sm sm:text-base">
                                    Collaborate with industry influencers to promote your brand and reach a wider, more
                                    engaged audience on social platforms.
                                </p>
                            </div>

                            <!-- Platform Selection -->
                            <div
                                class="relative p-6 bg-blackGray border border-neutral-500/60 rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                                <a :href="route('social-media-marketing')">
                                    <VideoCameraIcon class="h-8 w-8 text-secondary mb-3" />
                                    <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">
                                        Platform Selection</h5>
                                </a>
                                <p class="mb-3 text-white text-sm sm:text-base">
                                    Choose the best social platforms for your brand and target audience, ensuring
                                    maximum engagement and outreach.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Right side: Image -->
                    <!-- <div class="flex justify-center">
                        <img src="/images/social-media.jpg" alt="Social Media Marketing"
                            class="rounded-lg shadow-lg object-cover" style="width: 600px; height: 800px;" />
                    </div> -->
                    <div class="relative group overflow-hidden rounded-lg shadow-lg">
                        <img class="object-cover group-hover:scale-105 group-hover:grayscale-0 transition-all duration-700 " style="width: 600px; height: 900px;"
                            src="/images/social-media.jpg" alt="Social Media Marketing" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                    </div>
                </div>

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
import { CheckIcon, VideoCameraIcon, ChatBubbleLeftRightIcon, PresentationChartLineIcon, UserGroupIcon } from '@heroicons/vue/24/outline';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import Partners from '@/Components/Partners.vue';
import Testimonials from '@/Components/Testimonials.vue';
import Blogs from '@/Components/Blogs.vue';
import ContactUs from '@/Components/ContactUs.vue'

// SEO Metadata
useHead({
    title: 'Social Media Marketing by Industry | Tailored Marketing Strategies',
    meta: [
        {
            name: 'description',
            content: 'Explore industry-specific social media marketing solutions to boost your brand’s voice. From fashion to technology, we offer tailored social strategies to engage your audience and grow your business.',
        },
        {
            name: 'keywords',
            content: 'social media marketing, industry solutions, social media strategy, community management, influencer marketing, platform strategy',
        },
        {
            property: 'og:title',
            content: 'Social Media Marketing Solutions by Industry',
        },
        {
            property: 'og:description',
            content: 'Discover tailored social media marketing strategies for industries like fashion, technology, health, and wellness.',
        },
        {
            property: 'og:image',
            content: '/path-to-your-image.jpg',
        },
        {
            property: 'og:url',
            content: 'https://crossdigital.com/social-media-marketing',
        },
        {
            name: 'twitter:card',
            content: 'summary_large_image',
        },
    ],
})
</script>