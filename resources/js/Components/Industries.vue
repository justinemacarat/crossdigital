<template>
    <section id="industries">
        <div class="mt-32 lg:mt-52 grid grid-cols-1 lg:grid-cols-2 gap-16 text-white">
            <!-- Left Section -->
            <div class="flex flex-col justify-center">
                <p class="text-secondary font-semibold tracking-wider uppercase">Industries</p>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mt-4">
                    Our Expertise Across Industries
                </h1>
                <p class="mt-4 text-white font-light">
                    We cater to a multitude of industries, providing tailored digital marketing solutions designed to meet the unique needs of each sector. Whether you are in healthcare, retail, technology, or any other industry, we have the expertise to elevate your brand.
                </p>
                <a href="#" class="my-8 inline-flex items-center text-sm font-medium text-center text-white transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                    <ArrowRightCircleIcon class="size-5 text-white mr-2" />
                    Explore More Industries
                </a>
                <div class="flex flex-row">
                    <div class="mr-12 md:mr-20 mb-4 md:mb-0">
                        <h1 class="text-4xl md:text-5xl font-medium text-secondary leading-[2.5rem] md:leading-[3rem]">2.7K</h1>
                        <p class="text-white font-medium">Project Done</p>
                    </div>
                    <div>
                        <h1 class="text-4xl md:text-5xl font-medium text-secondary leading-[2.5rem] md:leading-[3rem]">226K</h1>
                        <p class="text-white font-medium">Satisfied Clients</p>
                    </div>
                </div>
            </div>

            <!-- Right Section (Responsive Boxes) -->
            <div class="flex flex-col md:flex-row justify-center items-start">
                <!-- Left Side (Two Boxes) -->
                <div class="md:relative md:top-8 space-y-8 mr-0 md:mr-4 w-full md:w-auto">
                    <div class="p-6 bg-blackGray border border-neutral-500/60 relative rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                        <a :href="route('ecommerce-solution')">
                            <ComputerDesktopIcon class="h-8 w-8 text-secondary mb-3" />
                            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">E-commerce Solutions</h5>
                        </a>
                        <p class="mb-3 font-normal text-white font-light">Boost your online sales with our comprehensive e-commerce strategies tailored for your business.</p>
                        <a :href="route('ecommerce-solution')" class="inline-flex items-center text-sm font-medium text-secondary transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                            Learn More
                            <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
                        </a>
                    </div>
                    <div class="p-6 bg-blackGray border border-neutral-500/60 relative rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                        <a href="#">
                            <ComputerDesktopIcon class="h-8 w-8 text-secondary mb-3" />
                            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Social Media Marketing</h5>
                        </a>
                        <p class="mb-3 font-normal text-white font-light">Engage your audience with targeted social media campaigns that drive brand awareness and customer loyalty.</p>
                        <a :href="route('social-media-marketing')" class="inline-flex items-center text-sm font-medium text-secondary transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                            Learn More
                            <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
                        </a>
                    </div>
                </div>

                <!-- Right Side (Two Boxes) -->
                <div class="space-y-8 w-full md:w-auto mt-8 md:mt-0 md:ml-4">
                    <div class="p-6 bg-blackGray border border-neutral-500/60 relative rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                        <a :href="route('content-marketing')">
                            <ComputerDesktopIcon class="h-8 w-8 text-secondary mb-3" />
                            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">Content Marketing</h5>
                        </a>
                        <p class="mb-3 font-normal text-white font-light">Drive traffic and engagement with compelling content tailored to resonate with your audience.</p>
                        <a :href="route('content-marketing')" class="inline-flex items-center text-sm font-medium text-secondary transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                            Learn More
                            <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
                        </a>
                    </div>
                    <div class="p-6 bg-blackGray border border-neutral-500/60 relative rounded-lg shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                        <a :href="route('seo-services')">
                            <ComputerDesktopIcon class="h-8 w-8 text-secondary mb-3" />
                            <h5 class="text-xl sm:text-2xl mb-2 font-semibold tracking-tight text-white">SEO Services</h5>
                        </a>
                        <p class="mb-3 font-normal text-white font-light">Improve your search engine rankings and attract more organic traffic with our proven SEO strategies.</p>
                        <a :href="route('seo-services')" class="inline-flex items-center text-sm font-medium text-secondary transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                            Learn More
                            <ArrowRightIcon class="h-5 w-5 text-secondary ml-2" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
//import { useHead } from '@vueuse/head';
import { ArrowRightCircleIcon, ArrowRightIcon, ComputerDesktopIcon } from '@heroicons/vue/24/solid';

const appUrl = import.meta.env.VITE_APP_URL;

// SEO Metadata
// useHead({
//   title: 'Industries We Serve - Cross Digital | Tailored Digital Marketing Solutions',
//   meta: [
//     {
//       name: 'description',
//       content: 'Discover Cross Digital\'s expertise across various industries. Our tailored digital marketing solutions empower businesses in healthcare, retail, technology, and more.',
//     },
//     {
//       property: 'og:title',
//       content: 'Industries We Serve - Cross Digital',
//     },
//     {
//       property: 'og:description',
//       content: 'Learn how Cross Digital provides specialized digital marketing solutions tailored to the unique needs of various industries, including e-commerce, social media, and SEO.',
//     },
//     {
//       property: 'og:url',
//       content: `${appUrl}/#industries`,
//     },
//     {
//       name: 'twitter:card',
//       content: 'summary_large_image',
//     },
//     {
//       name: 'twitter:title',
//       content: 'Industries We Serve - Cross Digital',
//     },
//     {
//       name: 'twitter:description',
//       content: 'Explore Cross Digital\'s tailored digital marketing solutions across multiple industries, designed to elevate your brand and drive growth.',
//     },
//   ],
// });
</script>
